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
                value='{{ old('title','Inception') }}'
            >
           <div class='error'>{{ $errors->first('title') }}</div>
        </div>

        <div class='form-group'>
           <label>Director:</label>
            <input
                type='text'
                id='director'
                name='director'
                value='{{ old('director','Christopher Nolan') }}'
            >
           <div class='error'>{{ $errors->first('director') }}</div>
        </div>

        <div class='form-group'>
           <label>Year Released (YYYY):</label>
           <input
               type='text'
               id='released'
               name='released'
               value='{{ old('released','2010') }}'
           >
           <div class='error'>{{ $errors->first('Released') }}</div>
        </div>

        <div class='form-group'>
           <label>URL of cover image:</label>
           <input
               type='text'
               id='cover'
               name='cover'
               value='{{ old('cover','https://lh6.googleusercontent.com/lN1TPrsLJdWaOuaGbTQVK5UExUjFbQAQOUVmX3jv8Kj9O1BY8phJ7b3G5nP4lj7269bBFg=s190') }}'
           >
           <div class='error'>{{ $errors->first('cover') }}</div>
        </div>

        <div class='form-group'>
           <label>URL to purchase this movie:</label>
           <input
               type='text'
               id='purchase_link'
               name='purchase_link'
               value='{{ old('purchase_link','http://www.amazon.com/Inception-Blu-ray-Leonardo-DiCaprio/dp/B002ZG981E') }}'
           >
           <div class='error'>{{ $errors->first('purchase_link') }}</div>
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
