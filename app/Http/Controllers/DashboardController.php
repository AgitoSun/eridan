<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $productsOnMain = $products->where('favorites', 1);
        $categories = Category::all();
        $allProductsCount = Product::all()->count();
        $productsWithoutPhoto = 0;
        $productsWithoutVideo = 0;
        foreach ($products as $product) {
            if ($product->images->isEmpty()) {
                $productsWithoutPhoto ++;
            }
            if (!$product->video) {
                $productsWithoutVideo ++;
            }
        }

        return \response()->view('pages.admin.dashboard', compact([
            'allProductsCount',
            'productsWithoutPhoto',
            'productsWithoutVideo',
            'productsOnMain',
            'categories',
        ]));
    }
}
