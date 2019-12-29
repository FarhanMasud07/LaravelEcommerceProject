<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.carts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required',
        ]);

        $cart = Cart::orWhere('ip_address', request()->ip())
            ->where('product_id', $request->product_id)
            ->first();

        if (!is_null($cart)) {
            $cart->increment('product_quantity');
        } else {
            $cart = new Cart();
            // if (Auth::check()) {
            //     $cart->user_id = Auth::id();
            // } else {
            // }

            $cart->ip_address = request()->ip();
            $cart->product_id = $request->product_id;

            $cart->save();
        }
        $notification = array(
            'messege' => 'Succcessfully product Added',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);

        if (!is_null($cart)) {
            $cart->product_quantity = $request->product_quantity;
            $cart->save();
        } else {
            return Redirect()->back();
        }

        $notification = array(
            'messege' => 'Succcessfully Cart Updated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteIndividualCart = Cart::find($id);

        if (!is_null($deleteIndividualCart)) {
            $deleteIndividualCart->delete();
        }

        $notification = array(
            'messege' => 'Succcessfully Deleted',
            'alert-type' => 'success'
        );

        return Redirect()->to('cart')->with($notification);
    }
}
