<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products= Product::all();

        // print_r($products->count());

        return view('pages.frontend.product.index', compact('products'));
    }

    function product3(){
        return view('pages.frontend.product.product3');
    }
}
