<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            "title" => "Products",
            "products" => Product::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            "title" => "Single Product",
            "product" => $product
        ]);
    }
}
