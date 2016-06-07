@extends('layout')

@section('content')
    <h3>{{ $news->title }}</h3>
    <p>{{ $news->body}}</p>
@stop