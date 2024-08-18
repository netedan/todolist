@extends('layout')
{{--todo добавить верстку в index.css--}}
@section('content')
    <form method="POST" action="/tasks">
        <div>
            <label> Task name </label>
            <input type="text" name="task_name">
        </div>
        <div>
            <label> Task status </label>
            <input type="text" name="task_status">
        </div>
        <div>
            <label> Task author ID </label>
            <input type="number" name="author_id">
        </div>
        <div>
            <label> Task executor ID </label>
            <input type="number" name="executor_id">
        </div>
        <div>
            <label> Add task </label>
            <input type="submit" name="Add task">
        </div>
    </form>
@endsection