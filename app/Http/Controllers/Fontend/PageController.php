<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function  index()
    {
        $product = Product::orderBy('id', 'desc')->paginate(2);
        return view('pages.products.index')->with('products', $product);
        //return response()->json($product);
    }

    public function create(Request $request)
    {

        $search = $request->search;
        $products = Product::orWhere('title', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhere('quantity', 'like', '%' . $search . '%')
            ->orWhere('slug', 'like', '%' . $search . '%')
            ->orderBy('id', 'desc')
            ->paginate(8);
        if (!is_null($search)) {
            return view('Pages.products.index', compact('search', 'products'));
        } else {
            $notification = array(
                'messege' => 'Products are not available in given data!!!',
                'alert-type' => 'success'
            );
            return Redirect()->to('product')->with($notification);
        }
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

            return Redirect()->to('/')->with($notification);
        }
    }
}
