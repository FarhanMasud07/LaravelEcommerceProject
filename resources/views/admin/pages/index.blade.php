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
						<i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Products</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a class="parent-item" href="#">Show Products</a>&nbsp;<i class="fa fa-angle-right"></i>
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
						<a href="{{ URL::to('administration/create') }}" class="btn btn-success">Add product</a>

						<div class="table-scrollable">
							<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
								<thead>
									<tr>

										<th> Title </th>
										<th> Quantity </th>
										<th> Price </th>
										<th> Status </th>

									</tr>
								</thead>
								@foreach($products as $product)



								<tbody>

									<tr class="odd gradeX">

										<td>{{$product->title}}</td>
										<td>{{$product->quantity}}</td>
										<td>{{$product->price}}</td>
										<td>{{$product->status}}</td>

										<td>
											<a href="{{URL::to('administration/'.$product->id.'/edit')}}" class="btn btn-sm btn-info">Edit</a>
										</td>

										<td>
											<a href="{{URL::to('administration/'.$product->id)}}" class="btn btn-sm btn-success">View</a>
										</td>

										<td>
											<form action="{{URL::to('administration/'.$product->id)}}" method="post">
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