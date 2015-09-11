@extends('templates.default')

@section('content')
<div class="clearfix">
	<div class="container">
		<form action="" method="POST">
		<table class="table-border">
			<tr>
				<td>Nip</td>
				<td><input type="text" class="form-control" name="nip" value=""></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control" name="name" value=""></td>
			</tr>
			<tr>
				<td>Addres</td>
				<td><input type="text" class="form-control" name="addres" value=""></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" class="form-control" name="phone" value=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" class="form-control" name="email" value=""></td>
			</tr>
			<tr>
	            <td colspan="2">
	            <button type="submit" class="btn btn-primary" name="submit">
	    		<span class="glyphicon glyphicon-save"></span> Save
				</button>  
	        </td>
        	</tr>
		</table>
	</div>
</div>