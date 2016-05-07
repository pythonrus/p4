@extends('layouts.master')

@section('id')
    Add a new movie
@stop

@section('content')

	<h1>Add a new movie<h1>

	<form method='POST' action='/movie/create'>

		{{ csrf_field() }}

		<div class='form-group'>
			<label>* Title:</label>
			<input
				type'text'
				id='title'
				name='title'
			>
		</div>

		<button type="submit" class="btn btn-primary">Add movie</button>
	</form>

@stop
