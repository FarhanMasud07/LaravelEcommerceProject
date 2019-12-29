@extends('pages.navbar')

@section('content')
<div class="container margin-top-20">
    <h2>My Cart Items</h2>
    <table class="table table-bordered table-stripe">
        <thead>
            <tr>
                <th> No.</th>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Product Quantity</th>
                <th>Unit Price</th>
                <th>Subtotal Price</th>
                <th>Delete</th>
            </tr>

        </thead>
        <tbody>
            @php
            $total_price =0;
            @endphp
            @foreach(App\Models\Cart::totalCarts() as $cart)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td><a href="{{URL::to('product/'.$cart->product->slug)}}"> {{$cart->product->title}}</a></td>
                <td>
                    @if($cart->product->images->count() > 0)

                    <img src="{{asset('upload/productspic/'.$cart->product->images->first()->image)}}" alt="" width="60px">
                    @endif
                </td>

                <td>
                    <form class="form-inline" action="{{URL::to('cart/'.$cart->id.'')}}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="number" name="product_quantity" class="form-control" value="{{$cart->product_quantity}}" />
                        <button type="submit" class="btn btn-success ml-1">Update</button>
                    </form>
                </td>
                <td>
                    {{$cart->product->price}} Taka
                </td>
                <td>
                    @php
                    $total_price += $cart->product->price * $cart->product_quantity
                    @endphp

                    {{$cart->product->price * $cart->product_quantity}} Taka
                </td>
                <td>
                    <form class="form-inline" action="{{URL::to('cart/'.$cart->id.'')}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="cart_id" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4"></td>
                <td>Total Ammount</td>
                <td colspan="2"><b>{{$total_price }} Taka</b></td>
            </tr>

        </tbody>
    </table>


    <div class="">
        <a href="{{URL::to('product')}}" class="btn btn-info btn-lg">Continue Shopping.</a>
        <a href="{{URL::to('checkout')}}" class="btn btn-warning btn-lg">Checkout.</a>
    </div>



</div>


@endsection