
@extends('layouts.master')

@section('head')
    <link href='/css/movie.css' rel='stylesheet'>
@stop

@section('title')
    All movies
@stop

@section('content')

    <h1>All the movies </h1>

    @if(sizeof($movies) == 0)
        You have not added any movies, you can <a href='/movie/create'>add a movie now to get started</a>.
    @else
        <div id='movies' class='cf'>
            @foreach($movies as $movie)
                <section class='movie'>

                    <a href='/movie//show/{{$movie->id}}'><h2 class='truncate'>{{ $movie->title }}</h2></a>

                    <h3 class='truncate'>{{ $movie->director->first_name }} {{ $movie->director->last_name }}</h3>

                    <img class='cover' src='{{ $movie->cover }}' alt='Cover for {{$movie->title}}'>

                    <div class='tags'>
                        @foreach($movie->tags as $tag)
                            <div class='tag'>{{ $tag->name }}</div>
                        @endforeach
                    </div>

                    <a href='/movie/edit/{{$movie->id}}'><i class='fa fa-pencil'></i> Edit</a><br>
                    <a href='/movie/show/{{$movie->id}}'><i class='fa fa-eye'></i> View</a><br>

                </section>
            @endforeach
        </div>
    @endif
@stop
