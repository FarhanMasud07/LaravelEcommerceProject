<!--  -->



@extends('admin.pages.Layout.navbar')

@section('content')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Show Brand</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li>
                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Products</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="parent-item" href="#">Show Brands</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                
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
                        <a href="{{ URL::to('Brand/create') }}" class="btn btn-success">Add Brand</a>

                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                <thead>
                                    <tr class="odd gradeX">

                                        <th class="center"> Brand Name </th>
                                       

                                    </tr>
                                </thead>
                                @foreach($Brands as $Brand)



                                <tbody>

                                    <tr class="odd gradeX">

                                        <td class="center">{{$Brand->name}}</td>
                                       

                                        <td> <a class="product-thumb" href="#"><img style="height:100px;width:100px;" src="{{asset('upload/Brandspic/'.$Brand->image)}}" alt="Brand"></a></td>

                                       

                                        <td class="center">
                                            <a href="{{URL::to('Brand/'.$Brand->id.'/edit')}}" class="btn btn-sm btn-info">Edit</a>
                                        </td>

                                        <td class="center">
                                            <a href="{{URL::to('Brand/'.$Brand->id)}}" class="btn btn-sm btn-success">View</a>
                                        </td>

                                        <td class="center">
                                            <form action="{{URL::to('Brand/'.$Brand->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" style="submit">Delete</button>
                                            </form>
                                        </td>

                                    </tr>

                                </tbody>

                                @endforeach
                            </table>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection