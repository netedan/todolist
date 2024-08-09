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
                    <form method="post" action="/tags/{{ $tag['id'] }}">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection