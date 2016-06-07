@extends('layout')
@section('content')
    @include('flash')
    <a href="/news/create">add</a>
    <ul>
    @foreach($news as $update)
        <li>
            <a href="/news/{{$update->id}}">{{ $update->title }} </a>
            <a href="/news/{{$update->id}}/edit">edit</a>
            <form action="/news/{{$update->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE')}}
                <button type="submit" name="delete">delete</button>
            </form>
        </li>
    @endforeach
    </ul>
@stop
