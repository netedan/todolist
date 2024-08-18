@extends('layout')
{{--todo добавить верстку в index.css--}}
@section('content')
    <form method="POST" action="/tags">
        <div>
            <label> Tag name </label>
            <input type="text" name="tag_name">
        </div>
        <div>
            <label> Add tag </label>
            <input type="submit" name="Add tag">
        </div>
    </form>
@endsection