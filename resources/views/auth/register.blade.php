@extends('auth.auth_layout')
@section('content')
    <form method="POST" action="/register">
        {!! csrf_field() !!}
        <div class="form-group">
            Name
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        </div>
        <div class="form-group">
            Email
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>

        <div class="form-group">
            Password
            <input type="password" name="password" id="password" class="form-control">
        </div>
        
        <div class="form-group">
            Confirm Password
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
@stop
