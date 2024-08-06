<head>
@foreach($users as $user)
    <div>
        User ID: <a href="/users/{{ $user->id }}">{{ $user->id }}</a>
        <p>User name: {{ $user->name }}</p>
        <p>User Surname: {{ $user->surname }}</p>
        <p>User patronymic: {{ $user->patronymic }}</p>
    </div>
@endforeach
</head>
    <body>
    <div class="base" id="buttons">
        <div>
            <label>Delete all users?</label>
            <input type="checkbox" name="agree?">
        </div>
        <div>
            <form class="btn" id="agree">
                <input type="submit" value="Delete"
                       style="height: 35px; width: 150px">

        </div>
    </body>