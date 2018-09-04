@extends('admin.layout.index')
@section('content')
	@if(session('message'))
		<div class="alert alert-success">
			{{session('message')}}
		</div>
    @endif
	<a href="admin/author/add"><button type="button" class="btn btn-default">Add Author</button></a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>fullname</th>
				<th>birthday</th>
				<th>address</th>
				<th>edit</th>
				<th>delete</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($author as $author)
				<tr>
					<td>{{$author->id}}</td>
					<td>{{$author->fullname}}</td>
					<td>{{$author->birthday}}</td>
					<td>{{$author->address}}</td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/author/edit/{{$author->id}}">edit</a></td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/author/delete/{{$author->id}}">delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection