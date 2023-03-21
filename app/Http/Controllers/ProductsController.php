<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        $product = 'Product 1';
//        return view('products.index', compact('product'));

        return view('products.index')->with('product', $product);
    }
}
