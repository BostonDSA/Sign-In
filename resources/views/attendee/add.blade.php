@extends('layout.master')

@section('content')
<h1>Sign In for (Event Name)</h1>

<div class="row">
	<form method="POST" action="/attendees/add" class="add-form col-md-4" >
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		{{ csrf_field() }}
		<p>Please sign in below!</p>
		<div class="form-group">
			<label for="title">First Name</label>
			<input id="first-name" class="form-control" type="text" name="first name"/>
		</div>

		<div class="form-group">
			<label for="title">Last Name</label>
			<input id="last-name" class="form-control" type="text" name="last name"/>
		</div>

		<div class="form-group">
			<label><input id="new-member" type="checkbox" /></label>
		</div>

		<button type="submit" class="btn btn-primary pull-right">Sign In</button>
	</form>
</div>

@stop