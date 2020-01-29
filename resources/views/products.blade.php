@extends('backend.layouts.adminty')

@section('title', 'Products')

@section('content')

<h1>Product list</h1>
<a href="products/create">
  <button type="button" class="btn btn-outline-primary">
  	<i class="fa fa-plus"></i>
    Add Product
  </button>
</a>
<hr style="border: 1px solid #404e67;">

@if (session()->has('message'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
        	<strong>Success!</strong> {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif

<div class="container">
	<div class="col-sm-12 grid-margin stretch-card">
		<div class="card">
		  <div class="card-body">
		    <table class="table" id="products">
		      <thead>
		      	<tr>
		      		<th>Product Name</th>
		      		<th>Brand</th>
		      		<th>Categories</th>
		      		<th>Quantity</th>
		      		<th>Action</th>
		      	</tr>
		      </thead>
		      <tbody>
		      	@foreach($products as $product)
		      	<tr>
		      		<td>{{$product->name}}</td>
                    <td>{{$product->brand}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->quantity}} pairs</td>
		      		<td>
		      			<a href="/admin/products/show/{{$product->id}}">
		      				<button class="btn btn-outline-primary" ><i class="fa fa-eye"></i>Show</button>
		      			</a>
		      			<br>
		      			<a href="/admin/products/edit/{{$product->id}}">
		      				<button class="btn btn-outline-success" > <i class="fa fa-edit"></i> Edit</button>
		      			</a> 
		      			<form method="POST" action="/admin/products/{{ $product->id }}">
		      				@method('DELETE')
		      				@csrf
			      			<a href="/admin/products/{{$product->id}}">
			      				<button class="btn btn-outline-danger" > <i class="fa fa-trash"></i> Del</button>
			      			</a>
			      		</form>
		      		</td>
		      	</tr>
		      	@endforeach
			  </tbody>
		    </table>
		  </div>
		</div>
	</div>
</div>

@endsection