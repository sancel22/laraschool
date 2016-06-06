@extends('auth.auth_layout')
@section('content')
    <form method="POST" action="/login">
        {!! csrf_field() !!}
        <div class="form-group">
            Email
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>

        <div class="form-group">
            Password
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="">
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Login</button>
        </div>
    </form>
@stop
