@extends('layouts.app')
@section('titile', 'Main')
@section('content')
    <h1>Welcome to my App</h1>
    <h3>List of users</h3>
    <ul>
        <li>{{$data}}</li>
{{--        @foreach ($data as $dat)--}}
{{--            <li>пользователь: ({{ $user['id']}}) {{ $user['name'] }}</li>--}}
{{--        @endforeach--}}
    </ul>
@endsection