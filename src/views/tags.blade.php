@extends('layout')

@section('content')
    <head>
    </head>
    <body>
    <div class="add_button">
        <ul>
            <li>
                <a href="/tags/create">Add tag</a>
            </li>
        </ul>
    </div>
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
                    <form method="get" action="/tags/{{ $tag['id'] }}/edit">
                        <input class="button_edit" type="submit" value="Edit">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </body>
@endsection