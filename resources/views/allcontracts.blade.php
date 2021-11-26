<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contract Information</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Book List</h2>
		<div class="container mt-6px" >
			<a href="{{URL::to('/') }}" class="btn btn-success" class="m-2">Home</a>
	<a href="{{URL::to('/newdata') }}" class="btn btn-primary">Add New</a>
		</div>
	
	<!-- <table class="table table-border">
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Barcode</th>
			<th>Book Code</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Action</th>
		</tr>
		@foreach($data as $row)
		<tr>
			<td>{{ $row->id}}</td>
			<td>{{ $row->name}}</td>
			<td>{{ $row->barcode}}</td>
			<td>{{ $row->bookcode}}</td>
			<th>{{ $row->email}}</td>
			<td>{{ $row->phone}}</td>
			<td>
				<a href="{{ URL::to('edit-contracts/'.$row->id)}}"class="btn btn-info">Edit</a>
				<a href="{{ URL::to('delete-contracts/'.$row->id)}}"class="btn btn-danger">Delete</a>
				<a href="{{ URL::to('view-contracts/'.$row->id)}}"class="btn btn-primary">View</a>
			</td>
		</tr>
		@endforeach
	</table> -->

	<table class="table table-border">
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Barcode</th>
			{{-- <th>Book Code</th> --}}
			<th>Email</th>
			<th>Phone</th>
			
		</tr>
		@foreach($contracts as $row)
		<tr>
			<td>{{ $row->id}}</td>
			<td>{{ $row->name}}</td>
			<td>{!! $row->barcode !!}
				{{ $row->bookcode}}

			</td>
			{{-- <td>{{ $row->bookcode}}</td> --}}
			<th>{{ $row->email}}</td>
			<td>{{ $row->phone}}</td>
			<td>
				<a href="{{ URL::to('edit-contracts/'.$row->id)}}"class="btn btn-info">Edit</a>
				<a href="{{ URL::to('delete-contracts/'.$row->id)}}"class="btn btn-danger">Delete</a>
				<a href="{{ URL::to('view-contracts/'.$row->id)}}"class="btn btn-primary">View</a>
				
			</td>
		</tr>
		@endforeach
	</table>
		
	</div>
	

</body>
</html>