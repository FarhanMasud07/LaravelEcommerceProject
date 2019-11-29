<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function products(){
        $product = Product::orderBy('id','desc')->get();
        return view('pages.products.index')->with('products',$product);
       //return response()->json($product);
    }
}