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
                        <a href="{{ URL::to('Category/create') }}" class="btn btn-success">Add Category</a>

                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                <thead>
                                    <tr>

                                        <th> Name </th>
                                        <th> Description </th>
                                        <th> Image </th>

                                    </tr>

                                </thead>




                                <tbody>

                                    <tr class="odd gradeX">

                                        <td>{{$singleCategoryview ->name}}</td>
                                        <td>{{$singleCategoryview ->description}}</td>
                                        <td> <a class="product-thumb" href="#"><img style="height:100px;width:100px;" src="{{asset('upload/categorypic/'.$singleCategoryview->image)}}" alt="Category"></a></td>
                                    
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