@extends('backend.layouts.adminty')

@section('title', 'Products')

@section('content')
<h1>{{ $product->name }} - Full Info</h1>
<a href="/admin/products">
  <button type="button" class="btn btn-outline-primary">
  	<i class="fa fa-arrow-left"></i>
    Back
  </button>
</a>

<a href="/admin/products/edit/{{$product->id}}">
	<button class="btn btn-outline-success float-right" > <i class="fa fa-edit"></i> Edit</button>
</a> 
<hr style="border: 1px solid #404e67;">

<div class="container">
	<table class="table table-bordered table-hover">
		  <tbody>
		    <tr>
		      <th scope="row">Brand</th>
		      <td>{{$product->brand}}</td>
		    </tr>

		    <tr>
		      <th scope="row">Category</th>
		      <td>{{$product->category->name}}</td>
		  	</tr>

		    <tr>
		      <th scope="row">Slug</th>
		      <td>{{$product->slug}}</td>
		    </tr>

		    <tr>
		      <th scope="row">Quantity Remaining</th>
		      <td>{{$product->quantity}}</td>
		    </tr>

		    <tr>
		      <th scope="row">Keywords</th>
		      <td>{{$product->keywords}}</td>
		    </tr>

		    <tr>
		      <th scope="row">Description</th>
		      <td>{{$product->description}}</td>
		    </tr>
		  </tbody>
		</table>

		<div class="well">
			<div class="row">
				<div class="col-sm-6">
					<img src="/storage/images/{{$product->image}}"alt="No image"style="width:100%; height:100%">
				</div>
			</div>
		</div>
</div>

@endsection