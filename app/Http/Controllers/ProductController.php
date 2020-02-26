<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function show($slug) {
        // recupero il prodotto corrispondente allo slug
        $product = Product::where('slug', $slug)->first();
        if($product) {
            return view('single-product', ['product' => $product]);
        } else {
            return abort(404);
        }
    }
}
