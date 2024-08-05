@foreach($users as $user)
    <div>
        User ID: <a href="/users/{{ $user->id }}">{{ $user->id }}</a>
        <p>User name: {{ $user->name }}</p>
        <p>User Surname: {{ $user->surname }}</p>
        <p>User patronymic: {{ $user->patronymic }}</p>
    </div>
@endforeach