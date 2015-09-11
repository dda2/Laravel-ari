@extends('templates.default')

@section('content')	
<div class="clearfix">
	<div class="container">
		<form action="{{ route('tambah.mahasiswa.post') }}" method="POST">
		<table class="table table-border">
			<tr>
				<td>Name</td>
				<td><input type="text" class="form-control" name="name" value="{{ Request::old('name') }}"></td>
				@if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                @endif
			</tr>
			<tr>
				<td>Addres</td>
				<td><textarea type="text" class="form-control" name="addres" value="{{ Request::old('addres') }}"></textarea></td>
				@if($errors->has('addres'))
					<span class="help-block"> {{ $errors->first('addres') }}</span>
				@endif
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" class="form-control" name="email" value="{{ Request::old('email') }}"></td>
				@if($errors->has('email'))
					<span class="help-block">{{ $errors->first('email') }}</span>
				@endif
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" class="form-control" name="phone" value="{{ Request::old('phone') }}"></td>
				@if($errors->has('phone'))
					<span class="help-block">{{ $errors->first('phone') }}</span>
				@endif
			</tr>
			 <input type="hidden" name="_token" value="{{ Session::token() }}">
			<tr>
	            <td colspan="2">
	            <button type="submit" class="btn btn-primary" name="submit">
	    		<span class="glyphicon glyphicon-save"></span> Save Data
				</button>  
	       		</td>
        	</tr>
		</table>
		</form>
	</div> 
</div>
@stop