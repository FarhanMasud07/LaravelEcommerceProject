@extends('pages.navbar')

@section('content')
<div class="card card-body container ">
    <div class="card card-body mt-2">
        <h2>Confirm Items</h2>
        <hr>
        <div class="row">
            <div class="col-md-7 border-right">
                @foreach(App\Models\Cart::totalCarts() as $cart)
                <p>
                    {{$cart->product->title}} -
                    <strong>{{$cart->product->price}}</strong>
                    - {{$cart->product_quantity}} item
                </p>
                @endforeach
                <p>
                    <a href="{{URL::to('cart')}}">Change Cart Item</a>
                </p>
            </div>
            <div class="col-md-5">
                @php
                $total_price =0 ;
                @endphp

                @foreach(App\Models\Cart::totalCarts() as $cart)
                @php
                $total_price += $cart->product->price * $cart->product_quantity
                @endphp
                @endforeach

                <p>
                    Total Price
                    <strong>{{ $total_price}}</strong> Taka
                </p>
                <p>
                    Total price with shipping cost :<strong> {{ $total_price + App\Models\setting::first()->shipping_cost}}</strong> Taka
                </p>
            </div>
        </div>

    </div>

    <div class="card card-body mt-2">
        <h2> Shipping Address</h2>
        <form action="{{URL::to('checkout')}}" method="POST">
            @csrf


            <div class="form-group row">
                <label for="" class="col-md-4 col-form-label text-md-right">Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                <div class="col-md-6">
                    <input type="number" class="form-control" name="phone_no">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-4 col-form-label text-md-right">Shipping Address</label>
                <div class="col-md-6">
                    <textarea name="shipping_address" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>


            <div class="form-group row">
                <label for="" class="col-md-4 col-form-label text-md-right">Payment Method</label>
                <div class="col-md-6">
                    <select name="payment_method_id" class="form-control" required id="payments">
                        <option value="">Select a payment method please</option>
                        @foreach($payments as $payment)
                        <option value="{{$payment->short_name}}">{{$payment->name}}</option>
                        @endforeach
                    </select>

                    @foreach($payments as $payment)

                    @if($payment->short_name == "cash_in")
                    <div id="payment_{{$payment->short_name}}" class="alert alert-success mt-2 text-center hidden">
                        <h3>
                            For cash in there is nothing necessary. Just click Finish order.
                            <br>
                            <small>You will get your product within two or three days</small>
                        </h3>
                    </div>
                    @else
                    <div id="payment_{{$payment->short_name}}" class="alert alert-success mt-2 text-center hidden">
                        <h3>{{$payment->name}} Payment</h3>
                        <p>
                            <strong>{{$payment->name}} No : {{$payment->no}}</strong>
                            <br>
                            <strong>Account Type : {{$payment->type}}</strong>
                        </p>
                        <div class="alert alert-success">Please send the above money to bikash no and write the transiction code below</div>
                        <!-- <label for="" class=" col-form-label text-md-right">Transiction id</label> -->

                    </div>
                    @endif


                    @endforeach
                    <input type="text" name="transiction_id" id="transiction_id" class="form-control hidden" placeholder="Enter transaction id">


                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class=" btn btn-primary">Order Now</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $("#payments").change(function() {
        $payment_method = $("#payments").val();
        if ($payment_method == "cash_in") {
            $("#payment_cash_in").removeClass('hidden');
            $("#payment_Bkash").addClass('hidden');
            $("#payment_Rocket").addClass('hidden');
        } else if ($payment_method == "Bkash") {
            $("#payment_Bkash").removeClass('hidden');
            $("#payment_Rocket").addClass('hidden');
            $("#payment_cash_in").addClass('hidden');
            $("#transiction_id").removeClass('hidden');
            
        } else if ($payment_method == "Rocket") {
            $("#payment_Rocket").removeClass('hidden');
            $("#payment_cash_in").addClass('hidden');
            $("#payment_Bkash").addClass('hidden');
            $("#transiction_id").removeClass('hidden');
        }


    })
</script>
@endsection