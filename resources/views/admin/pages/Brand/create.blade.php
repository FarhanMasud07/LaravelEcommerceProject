@extends('admin.pages.Layout.navbar')

@section('content')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Brands</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li>
                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a class="parent-item" href="#">Add Brands</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add</header>

                    </div>
                    <div class="card-body" id="bar-parent">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{URL::to('Brand')}}" enctype="multipart/form-data" id="form_sample_1" class="form-horizontal" method="post">
                            @csrf

                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">
                                        Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="name" placeholder="Name" class="form-control input-height" />
                                    </div>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">
                                        Description
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <textarea type="text" name="description" rows="8" cols="80" placeholder="Description">
                                        </textarea>
                                    </div>
                                    <span class="text-danger"></span>
                                </div>

                              

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Brand Picture
                                    </label>

                                    <div class="col-md-5">
                                        <input type="file" name="image">
                                    </div>

                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">
                                                Add Brand
                                            </button>
                                            <a class="btn btn-outline-primary" href="{{URL::to('Brand')}}">CANCEL</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection