@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is laravel done from extreme basic</p>
        <p>
            <a href="/login" class="btn btn-primary">Login</a>
            <a href="./register" class="btn btn-danger">Register</a>
        </p>
    </div>
@endsection