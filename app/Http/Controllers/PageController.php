<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function products(){
        $product = Product::orderBy('id','desc')->get();
        return view('pages.products.index')->with('products',$product);
       //return response()->json($product);
    }
}