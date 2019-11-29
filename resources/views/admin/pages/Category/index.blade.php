<!--  -->



@extends('admin.pages.Layout.navbar')

@section('content')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Show Categories</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li>
                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Products</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="parent-item" href="#">Show Categories</a>&nbsp;<i class="fa fa-angle-right"></i>
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
                        <a href="{{ URL::to('Category/create') }}" class="btn btn-success">Add Category</a>

                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                <thead>
                                    <tr class="odd gradeX">

                                        <th class="center"> Category Name </th>
                                        <th class="center"> Parent Category </th>
                                       

                                    </tr>
                                </thead>
                                @foreach($categorys as $category)



                                <tbody>

                                    <tr class="odd gradeX">

                                        <td class="center">{{$category->name}}</td>
                                        @if($category->parent_id== NULL)
                                        <td class="center"> Primary Category</td>
                                        @else
                                        <td class="center">{{$category->parent->name}}</td>
                                        @endif

                                        <td> <a class="product-thumb" href="#"><img style="height:100px;width:100px;" src="{{asset('upload/categorypic/'.$category->image)}}" alt="Category"></a></td>

                                        <!-- <td>{{$category->price}}</td>
										<td>{{$category->status}}</td> -->

                                        <td class="center">
                                            <a href="{{URL::to('Category/'.$category->id.'/edit')}}" class="btn btn-sm btn-info">Edit</a>
                                        </td>

                                        <td class="center">
                                            <a href="{{URL::to('Category/'.$category->id)}}" class="btn btn-sm btn-success">View</a>
                                        </td>

                                        <td class="center">
                                            <form action="{{URL::to('Category/'.$category->id)}}" method="post">
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