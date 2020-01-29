@extends('backend.layouts.adminty')

@section('title', 'Category')

@section('content')

<h1>Add Category</h1>
<a href="/admin/categories">
  <button type="button" class="btn btn-outline-primary">
  	<i class="fa fa-arrow-left"></i>
    Back
  </button>
</a>
<hr style="border: 1px solid #404e67;">

<div class="container">
	<form method="POST" action="/admin/categories">
		@csrf
		<div class="row">
			<div class="form-group col">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group col">
				<label for="author">Author</label>
				<input type="text" class="form-control" id="author" name="author">
			</div>
		</div>
		<button type="submit" class="btn btn-primary btn-block">Add Record</button>
	</form>
</div>

@endsection