@extends('layout.master')

@section('content')
<h1>Events</h1>
<a href="/events/add">Add Event</a>

<table class="table">
	<thead>
		<th>
			<td>title</td>
			<td>actions</td>
		</th>
	</thead>
	<tbody>
		<tr>
			<td>Event Title</td>
			<td>
				<a class="btn" href="/export/{id}">Export to Excel</a>
				<a class="btn" href="/delete/{id}">Delete</a>
			</td>
		</tr>
	</tbody>
</table>

@stop