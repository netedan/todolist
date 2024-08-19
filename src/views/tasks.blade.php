@extends('layout')

@section('content')
    <head>
    </head>
    <body>

    <div class="add_button">
        <ul>
            <li>
                <a href="/tasks/create">Add task</a>
            </li>
        </ul>
    </div>

    <table>
        <tr>
            <th>Task ID</th>
            <th>Task name</th>
            <th>Task status</th>
            <th>Task author ID</th>
            <th>Task executor ID</th>
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
                    <form method="post" action="/tasks/{{ $task['id'] }}/destroy">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                    <form method="get" action="/tasks/{{ $task['id'] }}/edit">
                        <input class="button_edit" type="submit" value="Edit">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </body>
@endsection