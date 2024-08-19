@extends('layout')
{{--todo добавить верстку в index.css--}}
@section('content')
    <head>

    </head>
    <body>
    <form method="POST" action="/tasks">
        <div class="add_page">
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
            <div id="add">
                <label> Add project </label>
                <input type="submit" name="Add project">
            </div>
        </div>
    </form>

    </body>
@endsection