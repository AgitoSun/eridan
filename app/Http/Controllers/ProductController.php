<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Insert;
use App\Models\Product;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category)
    {
        $category = $category->id;

        $products = Product::orderByDesc('created_at')->paginate(15);
        if ($category) {
            $products = Product::orderByDesc('created_at')->where('category_id', $category)->paginate(15);
        }

        $categories = Category::all();

        return \response()->view('pages.admin.catalog.products.index', compact([
            'products',
            'categories'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return \response()->view('pages.admin.catalog.products.create', compact([
            'categories',
        ]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'title' => $request->title,
            'sku' => $request->sku,
            'metal' => $request->metal,
            'weight' => $request->weight,
            'size' => $request->size,
            'availability' => $request->availability,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'favorites' => $request->favorites == 'on' ? true : false
        ]);

        foreach ($request->inserts as $insert) {
            Insert::create([
                'name' => $insert['name'],
                'product_id' => $product->id
            ]);
        }

        //Main image
        if ($request->main_image) {
            $main_path = $request->file('main_image')->store('public/img/products/' . $product->sku);
            Image::create([
                'path' => $main_path,
                'main' => 1,
                'product_id' => $product->id
            ]);
        }

        //Video
        if ($request->file('video')) {
            $video_path = $request->file('video')->store('public/img/products/' . $product->sku);
            $frame_path = 'public/img/products/'.$product->sku.'/'.pathinfo($video_path, PATHINFO_FILENAME).'.jpg';

            FFMpeg::open($video_path)
                ->getFrameFromSeconds(1)
                ->export()
                ->save($frame_path);

            Video::create([
                'path' => $video_path,
                'frame' => $frame_path,
                'product_id' => $product->id
            ]);
        }

        //Images
        if ($request->file('image')) {
            foreach ($request->file('image') as $file) {
                $path = $file->store('public/img/products/' . $product->sku);
                Image::create([
                    'path' => $path,
                    'main' => 0,
                    'product_id' => $product->id
                ]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Товар ' . $request->title . ' успешно добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $images = $product->images->where('main', 1);

        return \response()->view('pages.admin.catalog.products.edit', compact([
            'product',
            'categories',
            'images',
        ]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product, Image $image)
    {
        $product->update([
            'title' => $request->title,
            'sku' => $request->sku,
            'metal' => $request->metal,
            'weight' => $request->weight,
            'size' => $request->size,
            'availability' => $request->availability,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'favorites' => $request->favorites == 'on' ? true : false
        ]);

        $inserts_id = [];
        $inserts_key_id = [];

        //Добавляем id всех товаров из заявки
        foreach ($product->inserts as $insert) {
            $inserts_id[] = $insert->id;
        }

        if ($request->inserts) {
            foreach ($request->inserts as $key => $insert) {
                $inserts_key_id[] = $key;
                Insert::find($key)->update([
                    'name' => $insert['name']
                ]);
            }
        }

        //Удаляем все товары которые были удалены в форме
        foreach (array_diff($inserts_id, $inserts_key_id) as $id) {
            Insert::find($id)->delete();
        }

        if ($request->inserts_new) {
            foreach ($request->inserts_new as $insert_new) {
                Insert::create([
                    'name' => $insert_new['name'],
                    'product_id' => $product->id
                ]);
            }
        }

        //Main image
        if ($request->main_image) {
            if ($product->images->where('main', 1)->isNotEmpty()) {
                foreach ($product->images->where('main', 1) as $image) {
                    Storage::delete($image->path);
                    $image->delete();
                }
            }

            $main_path = $request->file('main_image')->store('public/img/products/' . $product->sku);

            $image->create([
                'path' => $main_path,
                'main' => 1,
                'product_id' => $product->id
            ]);
        }

        //Video
        if ($request->video) {
            if ($product->video) {
                Storage::delete($product->video['path']);
                Storage::delete($product->video['frame']);
                $product->video->delete();
            }

            $video_path = $request->file('video')->store('public/img/products/' . $product->sku);
            $frame_path = 'public/img/products/'.$product->sku.'/'.pathinfo($video_path, PATHINFO_FILENAME).'.jpg';

            FFMpeg::open($video_path)
                ->getFrameFromSeconds(1)
                ->export()
                ->save($frame_path);

            Video::create([
                'path' => $video_path,
                'frame' => $frame_path,
                'product_id' => $product->id
            ]);
        }

        //Images
        if ($request->image) {
            foreach ($product->images->where('main', 0) as $image) {
                if (substr(strrchr($image->path, '.'), 1) !== 'mp4') {
                    Storage::delete($image->path);
                    $image->delete();
                }
            }

            foreach ($request->file('image') as $file) {
                $path = $file->store('public/img/products/' . $product->sku);
                Image::create([
                    'path' => $path,
                    'main' => 0,
                    'product_id' => $product->id
                ]);
            }
        }

//        return redirect()->route('products.index')->with('success', 'Товар ' . $product->title . ' успешно изменен');
        return redirect()->back()->with('success', 'Товар ' . $product->title . ' успешно изменен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (!$product) {
            return abort(404);
        }

        Storage::deleteDirectory('public/img/products/' . $product->sku);

        foreach ($product->images as $image) {
            $image->delete();
            $product->video->delete();
        }

        $product->delete();

        return redirect()->route('products.index')->with('error', 'Товар ' . $product->title . ' успешно удален');
    }

    public function downloadImage(Product $product)
    {
        foreach ($product->images as $image) {
            return Storage::download($image->path, $product->sku.'.jpg');
        }
    }

    public function downloadVideo(Product $product)
    {

        return Storage::download($product->video->path, $product->sku.'.mp4');
    }
}
