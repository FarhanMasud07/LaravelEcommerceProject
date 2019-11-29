<!--  -->



@extends('admin.pages.Layout.navbar')

@section('content')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Show Products</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li>
                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="parent-item" href="#">Edit Old Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Edit Student</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Show</header>

                    </div>
                    <div class="card-body" id="bar-parent">
                        <a href="{{ URL::to('administration/create') }}" class="btn btn-success">Add product</a>

                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                <thead>
                                    <tr>

                                        <th> Title </th>
                                        <th> Quantity </th>
                                        <th> Price </th>
                                        <th> Status </th>
                                        <th> Product Pic </th>

                                    </tr>
                                </thead>




                                <tbody>

                                    <tr class="odd gradeX">

                                        <td>{{$singleproductview ->title}}</td>
                                        <td>{{$singleproductview ->quantity}}</td>
                                        <td>{{$singleproductview ->price}}</td>
                                        <td>{{$singleproductview ->status}}</td>

                                        <!-- @php $i=1; @endphp -->

                                        @foreach($singleproductview->images as $image)

                                        <!-- @if($i>0) -->

                                        <td> <a class="product-thumb" href="#"><img style="height:100px;width:100px;" src="{{asset('upload/productspic/'.$image->image)}}" alt="Product"></a></td>
                                       
                                        <!-- @endif -->

                                        <!-- @php $i--; @endphp -->

                                        @endforeach


                                    </tr>

                                </tbody>


                            </table>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection