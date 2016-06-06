@extends('layout')
@section('content')
    <ul>
    @foreach($news as $update)
        <li>{{ $update->title }} <a href="/news/{{$update->id}}/edit">edit</a></li>
    @endforeach
    </ul>
@stop
