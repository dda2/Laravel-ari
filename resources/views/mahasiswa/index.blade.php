@extends('templates.default')

@section('content')
    <div class="row">
        <h3>Data Mahasiswa</h3>
        <a href="{{ route ('tambah.mahasiswa')}}" class="btn btn-success"></i>Add New Record</a>
        <div class="container">
        	<table class="table table-bordered">
        		<tr>	
	        		<th>id</th>
	        		<th>Name</th>
	        		<th>Addres</th>
	        		<th>Phone</th>
	        		<th>Action</th>
	        	</tr>
	        	@foreach ($mahasiswa as $mahasiswa)
	        	<tr>
	        		<td>{{ $mahasiswa->id }}</td>
	        		<td>{{ $mahasiswa->name }}</td>
	        		<td>{{ $mahasiswa->addres }}</td>
	        		<td>{{ $mahasiswa->phone }}</td>
	        		<td align="center">
		                <a href=""><i class="glyphicon glyphicon-edit"></i></a>
		                <a href=""><i class="glyphicon glyphicon-remove-circle"></i></a>
            		</td>
	        	</tr>
	        	@endforeach
        	</table>
        </div>
@stop