@extends('layout')
{{--todo добавить верстку в index.css--}}
@section('content')
    <form method="POST" action="/users">
        <div>
            <label> User name </label>
            <input type="text" name="user_name">
        </div>
        <div>
            <label> User surname </label>
            <input type="text" name="user_surname">
        </div>
        <div>
            <label> User patronymic </label>
            <input type="text" name="user_patronymic">
        </div>
        <div>
            <label> Add user </label>
            <input type="submit" name="Add user">
        </div>
    </form>
@endsection