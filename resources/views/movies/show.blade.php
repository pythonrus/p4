@extends('layouts.master')

@section('title')
    Show movie {{ $id }}
@stop

@section('head')
    <link href='/css/movie/show.css' rel='stylesheet'>
@stop

@section('content')
    @if(isset($id))
        <h1>Show movie: {{ $id }}</h1>
    @else
        <h1>No movie chosen</h1>
    @endif
@stop

@section('body')
    <script src="/js/movie/show.js"></script>
@stop
