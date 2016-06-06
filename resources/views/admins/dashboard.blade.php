@extends('layout')
@section('content')
    <table>
        <tr>
            <th>Title</th>
            <th>Date</th>
        </tr>
    @foreach($news as $message)
        <tr>
            <td>{{ $message->title }}</td>
            <td>{{ $message->created_at }}</td>
        </tr>
    @endforeach
    </table>
@endsection