@extends('layouts.app')

@section('content')
<h1 class="pull-left">Events</h1>
<a class="pull-right btn btn-primary" href="/event/add">Add Event</a>

<table class="table">
	<thead>
		<tr>
			<th>title</th>
			<th>actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $item)
		<tr>
			<td>{{ $item->title }}</td>
			<td>
				<a class="btn" href="/export/{{ $item->id }}">Export to Excel</a>
				<a class="btn" href="/delete/{{ $item->id }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop