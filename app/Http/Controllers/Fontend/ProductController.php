<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use phpDocumentor\Reflection\Types\Boolean;

class ProductController extends Controller
{
    public function  index()
    {
        $product = Product::orderBy('id', 'desc')->get();
        return view('pages.products.search')->with('products', $product);
        //return response()->json($product);
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        if (!is_null($product)) {
            return view('Pages.products.individualShowProduct', compact('product'));
        } else {
            $notification = array(
                'messege' => 'Products are not available in given url!!!',
                'alert-type' => 'success'
            );

            return Rediret()->to('/')->with($notification);
        }
    }
}
