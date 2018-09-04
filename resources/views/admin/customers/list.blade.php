@extends('admin.layout.index')
@section('content')
	@if(session('message'))
		<div class="alert alert-success">
			{{session('message')}}
		</div>
    @endif
	<a href="admin/customers/add"><button type="button" class="btn btn-default">Add Customers</button></a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>fullname</th>
				<th>address</th>
				<th>phone</th>
				<th>edit</th>
				<th>delete</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($customers as $customers)
				<tr>
					<td>{{$customers->id}}</td>
					<td>{{$customers->fullname}}</td>
					<td>{{$customers->address}}</td>
					<td>{{$customers->phone}}</td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/customers/edit/{{$customers->id}}">edit</a></td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/customers/delete/{{$customers->id}}">delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection