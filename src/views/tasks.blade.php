<head>
    @foreach($tasks as $task)
        <div>
            Task ID: <a href="/tasks/{{ $task->id }}">{{ $task->id }}</a>
            <p>Task name: {{ $task->name }}</p>
            <p>Task status: {{ $task->status }}</p>
            <p>Task authorId: {{ $task->authorId }}</p>
            <p>Task executorId: {{ $task->executorId }}</p>
        </div>
    @endforeach
</head>
<body>
<div class="base" id="buttons">
    <div>
        <label>Delete all tasks?</label>
        <input type="checkbox" name="agree?">
    </div>
    <div>
        <form class="btn" id="agree">
            <input type="submit" value="Delete"
                   style="height: 35px; width: 150px">

    </div>
</body>