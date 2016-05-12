@extends('layouts.master')

@section('title')
    Edit movie {{ $movie->title }}
@stop

@section('content')

<h1>Edit movie {{ $movie->title }}</h1>

    <form method='POST' action='/movie/edit'>

        <input type='hidden' name='id' value='{{$movie->id}}'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>Title:</label>
            <input
                type='text'
                id='title'
                name='title'
                value='{{ $movie->title }}'
            >
           <div class='error'>{{ $errors->first('title') }}</div>
        </div>

        <div class='form-group'>
            <label for ='director_id'>Director:</label>
            <select name='director_id' id='director_id'>
                @foreach($directors_for_dropdown as $director_id => $director_name)
                    <option value='{{$director_id}}' {{ ($movie->director_id == $director_id) ? 'SELECTED' : '' }}>
                        {{$director_name}}
                    </option>
                @endforeach
            </select>
           <div class='error'>{{ $errors->first('director') }}</div>
        </div>

        <div class='form-group'>
           <label>Year Released (YYYY):</label>
           <input
               type='text'
               id='released'
               name='released'
               value='{{ $movie->released }}'
           >
           <div class='error'>{{ $errors->first('Released') }}</div>
        </div>

        <div class='form-group'>
           <label>URL of cover image:</label>
           <input
               type='text'
               id='cover'
               name='cover'
               value='{{ $movie->cover }}'
           >
           <div class='error'>{{ $errors->first('cover') }}</div>
        </div>

        <div class='form-group'>
           <label>URL to purchase this movie:</label>
           <input
               type='text'
               id='purchase_link'
               name='purchase_link'
               value='{{ $movie->purchase_link }}'
           >
           <div class='error'>{{ $errors->first('purchase_link') }}</div>
        </div>

        <div class='form-instructions'>
            All fields are required
        </div>

		<button type="submit" class="btn btn-primary">Save changes</button>

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>

@stop
