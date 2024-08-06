@extends('layout')

@section('content')
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
                    <form method="post" action="/users/{{ $user['id'] }}">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection