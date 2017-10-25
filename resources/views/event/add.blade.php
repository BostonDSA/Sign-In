@extends('layout.master')

@section('content')
<h1>Add Event</h1>

<div class="row">
	<form method="POST" action="/events/add" class="add-form col-md-4" >
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
		<div class="form-group">
			<label for="title">Event Title</label>
			<input id="title" class="form-control" type="text" name="title"/>
		</div>

		<button type="submit" class="btn btn-primary pull-right">Create Event</button>
	</form>
</div>

@stop