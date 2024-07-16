<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Insert;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CatalogController extends Controller
{
    public function index(): Response
    {
        $categories = Category::all();
        $products = Product::orderByDesc('created_at')->paginate(12);

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
        $inserts = Insert::all()->where('product_id', $product->id);

        return \response()->view('pages.guest.product', compact([
            'product',
            'inserts'
        ]));
    }
}
