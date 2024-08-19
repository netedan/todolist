@extends('layout')
{{--todo добавить верстку в index.css--}}
@section('content')

    <form method="POST" action="/projects">
        <div>
            <label> Project author ID </label>
            <input type="number" name="author_id">
        </div>
        {{--        <div>--}}
        {{--            <label> Project tasks </label>--}}
        {{--            <input type="text" name="tasks">--}}
        {{--        </div>--}}
        <div>
            <label> Project name </label>
            <input type="text" name="project_name">
        </div>
        <div>
            <label> Add project </label>
            <input type="submit" name="Add project">
        </div>
    </form>
@endsection