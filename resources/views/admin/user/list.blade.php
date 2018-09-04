@extends('admin.layout.index')
@section('content')
	@if(session('message'))
		<div class="alert alert-success">
			{{session('message')}}
		</div>
    @endif
	<a href="admin/user/add"><button type="button" class="btn btn-default">Add User</button></a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>username</th>
				<th>pass</th>
				<th>edit</th>
				<th>delete</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($user as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->password}}</td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/user/edit/{{$user->id}}">edit</a></td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/user/delete/{{$user->id}}">delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection