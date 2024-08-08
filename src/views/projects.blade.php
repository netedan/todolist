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
            <th>Project ID</th>
            <th>Project name</th>
            <th>Author ID</th>
            <th>Manage</th>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td><a href="/projects/{{ $project['id'] }}">{{ $project['id'] }}</a></td>
                <td>{{ $project['author_id'] }}</td>
                <td>{{ $project['project_name'] }}</td>
                {{--        <p>{{ $project->tasks }}</p>--}}
                <td>
                    <form method="post" action="/projects/{{ $project['id'] }}">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    </body>
@endsection