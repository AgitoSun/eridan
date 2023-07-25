<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index() {
            $products = Product::all()->where('favorites', true);

            return \response()->view('pages.guest.home', compact([
                'products',
            ]));
        }
}
