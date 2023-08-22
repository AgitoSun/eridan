<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return \response()->view('pages.admin.catalog.products.index', compact([
            'products',
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
            'insert_1' => $request->insert_1,
            'insert_2' => $request->insert_2,
            'insert_3' => $request->insert_3,
            'insert_4' => $request->insert_4,
            'insert_5' => $request->insert_5,
            'insert_6' => $request->insert_6,
            'size' => $request->size,
            'availability' => $request->availability,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'favorites' => $request->favorites == 'on' ? true : false
        ]);

        //Main image
        $main_path = $request->file('main_image')->store('public/img/products/' . $product->sku);
        Image::create([
            'path' => $main_path,
            'main' => 1,
            'product_id' => $product->id
        ]);

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

        return \response()->view('pages.admin.catalog.products.edit', compact([
            'product',
            'categories',
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
            'insert_1' => $request->insert_1,
            'insert_2' => $request->insert_2,
            'insert_3' => $request->insert_3,
            'insert_4' => $request->insert_4,
            'insert_5' => $request->insert_5,
            'insert_6' => $request->insert_6,
            'size' => $request->size,
            'availability' => $request->availability,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'favorites' => $request->favorites == 'on' ? true : false
        ]);

        //Main image
        if ($request->main_image) {
            foreach ($product->images->where('main', 1) as $image) {
                Storage::delete($image->path);
            }

            $main_path = $request->file('main_image')->store('public/img/products/' . $product->sku);

            $image->update([
                'path' => $main_path,
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

        return redirect()->route('products.index')->with('success', 'Товар ' . $product->title . ' успешно изменен');
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
}
