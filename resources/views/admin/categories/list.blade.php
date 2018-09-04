@extends('admin.layout.index')
@section('content')
	@if(session('message'))
		<div class="alert alert-success">
			{{session('message')}}
		</div>
    @endif
	<a href="admin/categories/add"><button type="button" class="btn btn-default">Add Category</button></a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>sort</th>
				<th>edit</th>
				<th>delete</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td>{{$category->sort}}</td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/categories/edit/{{$category->id}}">edit</a></td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="{{route('categories.delete', $category->id)}}">delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection