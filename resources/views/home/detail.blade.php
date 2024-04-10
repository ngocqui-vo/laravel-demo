@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>User information</h1>

{{--            <h2>Username: {{$user->username}}</h2>--}}
{{--            <h2>Email: {{$user->email}}</h2>--}}
            <p>test {{$user->email}}</p>

            <a href="{{route('home.edit', ['user_id'=>$user->id])}}" class="btn btn-primary">Edit</a>

        @endauth

        @guest
            <p class="lead">Your viewing the detail page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
