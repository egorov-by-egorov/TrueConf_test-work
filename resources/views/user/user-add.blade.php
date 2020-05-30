@extends('layouts.app')
@section('title', 'Add user')
@section('content')
    <h1>Add User</h1>
    <form action="">
        <label for="user__name">User Name</label>
        <input id="user__name" type="text" name="user-name">
        <button type="submit">Add</button>
    </form>
@endsection