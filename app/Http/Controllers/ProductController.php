<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(ProductStoreRequest $request)
    {
        $product = Product::create($request->all());

        $main_path = $request->file('main_image')->store('public/img/products/' . $product->sku);
        Image::create([
            'path' => $main_path,
            'main' => 1,
            'product_id' => $product->id
        ]);

        foreach ($request->file('image') as $file) {
            $path = $file->store('public/img/products/' . $product->sku);
            Image::create([
                'path' => $path,
                'main' => 0,
                'product_id' => $product->id
            ]);
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
    public function update(Request $request, Product $product, Image $image)
    {
        $product->update($request->all());

        if ($request->main_image) {
            foreach ($product->images->where('main', 1) as $image) {
                Storage::delete($image->path);
            }

            $main_path = $request->file('main_image')->store('public/img/products/' . $product->sku);

            $image->update([
                'path' => $main_path,
            ]);
        }

        if ($request->image) {
            foreach ($product->images->where('main', 0) as $image) {
                Storage::delete($image->path);
                $image->delete();
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
        }

        $product->delete();

        return redirect()->route('products.index')->with('error', 'Товар ' . $product->title . ' успешно удален');
    }
}
