@extends('layouts.master')

@section('title')
    Add a new movie
@stop

@section('content')

<h1>Add a new movie</h1>

    <form method='POST' action='/movie/create'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>Title:</label>
            <input
                type='text'
                id='title'
                name='title'
                value='{{ old('title') }}'
            >
           <div class='error'>{{ $errors->first('title') }}</div>
        </div>

        <div class='form-group'>
           <label>Director:</label>
            <input
                type='text'
                id='director'
                name='director'
                value='{{ old('director') }}'
            >
           <div class='error'>{{ $errors->first('director') }}</div>
        </div>

        <div class='form-instructions'>
            All fields are required
        </div>

		<button type="submit" class="btn btn-primary">Add movie</button>

        {{--
        <ul class=''>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        --}}

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>

@stop
