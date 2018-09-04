@extends('admin.layout.index')
@section('content')
	@if(session('message'))
		<div class="alert alert-success">
			{{session('message')}}
		</div>
    @endif
	<a href="admin/products/add"><button type="button" class="btn btn-default">Add Products</button></a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>id_author</th>
				<th>id_categories</th>
				<th>price</th>
				<th>image</th>
				<th>edit</th>
				<th>delete</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($products as $products)
				<tr>
					<td>{{$products->id}}</td>
					<td>{{$products->name}}</td>
					<td>{{$products->id_author}}</td>
					<td>{{$products->id_categories}}</td>
					<td>{{$products->price}}</td>
					<td>{{$products->image}}</td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/products/edit/{{$products->id}}">edit</a></td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/products/delete/{{$products->id}}">delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection