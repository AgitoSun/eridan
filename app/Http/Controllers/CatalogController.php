<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Insert;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;

class CatalogController extends Controller
{
    public function index(): Response
    {
        $categories = Category::all();
        $tags = Tag::all();
        $products = Product::orderByDesc('created_at')->paginate(12);

        return \response()->view('pages.guest.catalog', compact([
            'categories',
            'tags',
            'products',
        ]));
    }

    public function category($category): Response
    {
        $categories = Category::all();
        $products = Product::where('category_id', $category)->orderByDesc('created_at')->paginate(12);
        $tags = Tag::all();

        return \response()->view('pages.guest.catalog', compact([
            'products',
            'categories',
            'tags',
        ]));
    }

    public function tag($tag): Response
    {
        $allTags = Tag::orderByDesc('created_at');
        $products = $allTags->find($tag)->products;

        //Пагинация
        $perPage = 12;
        $page = LengthAwarePaginator::resolveCurrentPage('page');

        $products = new LengthAwarePaginator($products->forPage($page, $perPage), $products->count(), $perPage, $page, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
            'query' => request()->query(),
        ]);

        $categories = Category::all();
        $tags = Tag::all();

        return \response()->view('pages.guest.catalog', compact([
            'products',
            'categories',
            'tags'
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
