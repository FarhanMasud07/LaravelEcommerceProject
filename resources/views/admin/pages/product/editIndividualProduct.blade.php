@extends('admin.pages.Layout.navbar')

@section('content')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Fees</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li>
                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
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

                        <form action="{{URL::to('administration/'.$products->id)}}"  enctype="multipart/form-data" id="form_sample_1" class="form-horizontal" method = "post"  >
                          @csrf
                          @method('PUT') 
                            
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">
                                        Title
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name ="title" value="{{$products->title}}" placeholder="Title"
                                               class="form-control input-height" />
                                    </div>
                                    <span  class="text-danger"></span>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">
                                        Description
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <textarea type="text" name ="description" rows ="8" cols = "80"  placeholder="Description">{{$products->description}}
                                        </textarea>
                                    </div>
                                    <span  class="text-danger"></span>
                                </div>


                                <div class="form-group row">
                                    <label class="control-label col-md-3">
                                       Quantity
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="quantity" value="{{$products->quantity}}" placeholder="Quantity"
                                               class="form-control input-height" />
                                    </div>
                                    <span class="text-danger"></span>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">
                                        Price
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name ="price" value="{{$products->price}}" placeholder="Price"
                                               class="form-control input-height" />
                                    </div>
                                    <span  class="text-danger"></span>
                                </div>

                                
                            
                                <div class="form-group row">
                                    <label class="control-label col-md-3">
                                        Status
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input  type="text" name="status" value="{{$products->status}}" placeholder="Status"
                                               class="form-control input-height" />
                                    </div>
                                    <span  class="text-danger"></span>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">
                                        Select Category
                                        <span class="required"> * </span>
                                    </label>
                                    <select class="form-control" name="category_id">
                                        <option value="">Please select a category for product</option>
                                        @foreach(App\Models\Category::orderBy('name','asc')->where('parent_id',NULL)->get() as $parent)
                                        <option value="{{$parent->id}}"{{$parent->id==$products->category->id ? 'selected' : ''}}>{{$parent->name}}</option>
                                        @endforeach

                                        @foreach(App\Models\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child)
                                        <option value="{{$child->id}}" {{$child->id==$products->category->id ? 'selected' : ''}}>---->{{$child->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger"></span>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">
                                        Select Brand
                                        <span class="required"> * </span>
                                    </label>
                                    <select class="form-control" name="brand_id">
                                        <option value="">Please select a Brand for product</option>
                                        @foreach(App\Models\Brand::orderBy('name','asc')->get() as $br)
                                        <option value="{{$br->id}}" {{$br->id == $products->brand->id ? 'selected' : ''}}>{{$br->name}}</option>

                                        @endforeach
                                    </select>
                                    <span class="text-danger"></span>
                                </div>


                                <div class="form-group ">
									<label class="control-label col-md-3">Product Picture
									 </label>
									<div class = "row">
                                    
                                        <div class="col-md-4">
                                           <input type="file"    name ="image[]" >
                                        </div>

                                        <div class="col-md-4">
                                           <input type="file" value="{{$products->image}}"  name ="image[]" >
                                        </div>

                                       
											
									</div>

                                 
								</div>

                               



                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit"
                                                    class="btn btn-info m-r-20">
                                                Update Product
                                            </button>
                                            <a  class="btn btn-outline-primary">CANCEL</a>
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