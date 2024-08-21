@extends('layout')
{{--todo добавить верстку в index.css
todo изучить массивы и работу с ними--}}
@section('content')
    <form method="POST" action="/tasks/{{$task['id']}}">
        <div>
            <label> Task name </label>
            <input type="text" name="task_name" value="{{$task['name']}}">
        </div>
        <div>
            <label> Task status</label>
            <input type="text" name="task_status" value="{{$task['status']}}">
        </div>
        <div>
            <label> Author ID</label>
            <input type="number" name="author_id" value="{{$task['author_id']}}">
        </div>
        <div>
            <label> Executor ID</label>
            <input type="number" name="executor_id" value="{{$task['executor_id']}}">
        </div>
        <div>
            <input type="submit" name="Edit task">
        </div>
    </form>
@endsection