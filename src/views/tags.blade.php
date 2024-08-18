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
    <a href="/tags/create">Add tag</a>
    <table>
        <tr>
            <th>Tag ID</th>
            <th>Tag name</th>
            <th>Manage</th>
        </tr>
        @foreach($tags as $tag)
            <tr>
                <td><a href="/tags/{{ $tag['id'] }}">{{ $tag['id'] }}</a></td>
                <td>{{ $tag['name'] }}</td>
                <td>
                    <form method="post" action="/tags/{{ $tag['id'] }}/destroy">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                    <a href="/tags/{{ $tag['id'] }}/edit">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection