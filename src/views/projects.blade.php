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
<a href="/projects/create">Add project</a>
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
                    <a href="/projects/{{ $project['id'] }}/edit">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection