@extends('admin.layout.index')
@section('content')
	@if(session('message'))
		<div class="alert alert-success">
			{{session('message')}}
		</div>
    @endif
	<a href="admin/orders/add"><button type="button" class="btn btn-default">Add Orders</button></a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>id_product</th>
				<th>id_customer</th>
				<th>name</th>
				<th>price</th>
				<th>deliver_address</th>
				<th>deliver_phone</th>
				<th>edit</th>
				<th>delete</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $orders)
				<tr>
					<td>{{$orders->id}}</td>
					<td>{{$orders->id_product}}</td>
					<td>{{$orders->id_customer}}</td>
					<td>{{$orders->name}}</td>
					<td>{{$orders->price}}</td>
					<td>{{$orders->deliver_address}}</td>
					<td>{{$orders->deliver_phone}}</td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/orders/edit/{{$orders->id}}">edit</a></td>
					<td><span class="glyphicon glyphicon-pencil"></span><a href="admin/orders/delete/{{$orders->id}}">delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection