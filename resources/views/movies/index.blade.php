@extends('layouts.master')

@section('title')
    All movies
@stop

@section('content')

    <h1>All the movies </h1>

    <div class='movie'>
        @foreach($movies as $movie)
            <h2>{{ $movie->title }}</h2>
            <img src='{{ $movie->cover }}' alt='Cover for {{$movie->title}}'>
            <a href='/movie/edit/{{$movie->id}}'>Edit</a>
        @endforeach
    </div>
@stop
