@extends('layout')

@section('content')
    <head>
        <style>
            tr {
                font-size: 20px;
                text-align: center;
            }
            body {
                background-color: beige;
            }
        </style>
    </head>
    <body>
    <table>
        <tr>
            <th>Task ID</th>
            <th>Task name</th>
            <th>Task status</th>
            <th>Task executor ID</th>
            <th>Task author ID</th>
            <th>Manage</th>
        </tr>
        @foreach($tasks as $task)
            <tr>
                <td><a href="/tasks/{{ $task['id'] }}">{{ $task['id'] }}</a></td>
                <td>{{ $task['name'] }}</td>
                <td>{{ $task['status'] }}</td>
                <td>{{ $task['author_id'] }}</td>
                <td>{{ $task['executor_id'] }}</td>
                <td>
                    <form method="post" action="/tasks/{{ $task['id'] }}">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </body>
@endsection