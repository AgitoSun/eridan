<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CatalogController extends Controller
{
    public function index(): Response
    {
        $categories = Category::all();
        $products = Product::all();

        return \response()->view('pages.guest.catalog', compact([
            'categories',
            'products',
        ]));
    }

    public function category($category): Response
    {
        $categories = Category::all();
        $products = Product::all()->where('category_id', $category);

        return \response()->view('pages.guest.catalog', compact([
            'products',
            'categories',
        ]));
    }

    public function show(Product $product): Response
    {
        return \response()->view('pages.guest.product', compact([
            'product',
        ]));
    }
}
