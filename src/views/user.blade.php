@extends('layout')

@section('content')
<div>
    <p>User ID: {{ $user['id'] }}</p>
    <p>User name: {{ $user['name'] }}</p>
    <p>User surname: {{ $user['surname']}}</p>
    <p>User patronymic: {{ $user['patronymic'] }}</p>
</div>
@endsection