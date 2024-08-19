@extends('layout')

@section('content')
    <head>
    </head>
    <div class="add_button">
        <ul>
            <li>
                <a href="/users/create">Add user</a>
            </li>
        </ul>
    </div>
    <table>
        <tr>
            <th>User ID</th>
            <th>User name</th>
            <th>User surname</th>
            <th>User patronymic</th>
            <th>Manage</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td><a href="/users/{{ $user['id'] }}">{{ $user['id'] }}</a></td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname'] }}</td>
                <td>{{ $user['patronymic'] }}</td>
                <td>
                    <form method="post" action="/users/{{ $user['id'] }}/destroy">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                    <form method="get" action="/users/{{ $user['id'] }}/edit">
                        <input class="button_edit" type="submit" value="Edit">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection