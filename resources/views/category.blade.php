@extends('backend.layouts.adminty')

@section('title', 'Category')

@section('content')

<h1>Category list</h1>
<a href="categories/create">
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
		    <table class="table" id="categories">
		      <thead>
		      	<tr>
		      		<th>ID</th>
		      		<th>Category Name</th>
		      		<th>Author</th>
		      		<th>Action</th>
		      	</tr>
		      </thead>
		      <tbody>
		      	@foreach($categories as $category)
		      	<tr>
		      		<td>{{$category->id}}</td>
		      		<td>{{$category->name}}</td>
                    <td>{{$category->author}}</td>
		      		<td>
		      			<form method="POST" action="/admin/categories/{{ $category->id }}">
		      				@method('DELETE')
		      				@csrf
		      				<a href="/admin/categories/{{$category->id}}">
		      					<button class="btn btn-outline-danger" > <i class="fa fa-trash"></i> Delete</button>
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