@extends('templates.default')

@section('content')
    <div class="row">
        <h3>Data dosen</h3>
        <a href="{{ route('dosen.add')}}" class="btn btn-success"></i>Add New Record</a>
        <div class="container">
        	<table class="table table-bordered">
        		<tr>	
	        		<th>id</th>
	        		<th>Nip</th>
	        		<th>Name</th>
	        		<th>Addres</th>
	        		<th>Phone</th>
	        		<th>Email</th>
	        	</tr>
	        	@foreach ($dosen as $dosen)
	        	<tr>
	        		<td>{{ $dosen->id }}</td>
	        		<td>{{ $dosen->nip }}</td>
	        		<td>{{ $dosen->name }}</td>
	        		<td>{{ $dosen->addres }}</td>
	        		<td>{{ $dosen->phone }}</td>
	        		<td>{{ $dosen->email }}</td>
	        	</tr>
	        	@endforeach
        	</table>
        </div>
@stop