@extends('layout')
{{--todo перенести стили в index.css--}}
@section('content')

    {{--        <style>--}}
    {{--            tr {--}}
    {{--                font-size: 20px;--}}
    {{--                text-align: center;--}}
    {{--            }--}}
    {{--            body {--}}
    {{--                background-color: beige;--}}
    {{--            }--}}
    {{--        </style>--}}
    {{--todo сделать нормальную кнопку, разобраться, как работаeт blade (фигурные скобки, кавычки)--}}
    <head>
        <style>

        </style>
    </head>
    <body>
    <div class="add_button">
        <ul>
            <li>
                <a href="/projects/create">Add project</a>
            </li>
        </ul>
    </div>
    <table>
        <tr>
            <th>Project ID</th>
            <th>Author ID</th>
            <th>Project name</th>
            <th>Manage</th>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td><a href="/projects/{{ $project['id'] }}">{{ $project['id'] }}</a></td>
                <td>{{ $project['author_id'] }}</td>
                <td>{{ $project['project_name'] }}</td>
                {{--        <p>{{ $project->tasks }}</p>--}}
                <td>
                    <form method="post" action="/projects/{{ $project['id'] }}/destroy">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>

                    <form method="get" action="/projects/{{ $project['id'] }}/edit">
                        <input class="button_edit" type="submit" value="Edit">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </body>
@endsection