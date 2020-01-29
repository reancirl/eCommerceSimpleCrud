@extends('backend.layouts.adminty')

@section('title', 'Products')

@section('content')
<h1>Edit Product</h1>
<a href="/admin/products">
  <button type="button" class="btn btn-outline-primary">
  	<i class="fa fa-arrow-left"></i>
    Back
  </button>
</a>
<hr style="border: 1px solid #404e67;">

<div class="container">
	<form method="POST" action="/admin/products/{{ $product->id }}" enctype="multipart/form-data">
		@method('PATCH')
		@csrf
		<div class="row">
			<div class="form-group col">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
			</div>
			<div class="form-group col">
			    <label for="category_id">Category</label>
			    <select class="form-control" name="category_id" id="category_id">
			    @foreach($categories as $category)
			      <option value="{{$category->id}}">{{ $category->name }}</option>
			    @endforeach
			    </select>
			  </div>
		</div>

		<div class="row">
			<div class="form-group col">
				<label for="brand">Brand</label>
				<input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}">
			</div>
			<div class="form-group col">
				<label for="keywords">Keyword</label>
				<input type="text" class="form-control" id="keywords" name="keywords" value="{{ $product->keywords }}">
			</div>
		</div>

		<div class="row">
			<div class="form-group col">
				<label for="slug">Slug</label>
				<input type="text" class="form-control" id="slug" name="slug" value="{{ $product->slug }}">
			</div>
			<div class="form-group col">
				<label for="quantity">Quantity</label>
				<input type="text" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
			</div>
		</div>

		<div class="row">
			<div class="form-group col">
				<label for="description">Description</label>
				<textarea class="form-control" id="description" name="description" rows="3"> {{$product->description}} </textarea>
			</div>
		</div>

		<div class="row">
			<div class="form-group col d-flex flex-column">
				<label for="image">Product Image</label>
				<input type="file" name="image">
			</div>
		</div>

		<button type="submit" class="btn btn-primary btn-block">Update Record</button>
	</form>
</div>

@endsection