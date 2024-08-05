@foreach($tasks as $task)
    <div>
        Task ID: <a href="/tasks/{{ $task->id }}">{{ $task->id }}</a>
        <p>Task name: {{ $task->name }}</p>
        <p>Task status: {{ $task->status }}</p>
        <p>Task authorId: {{ $task->authorId }}</p>
        <p>Task executorId: {{ $task->executorId }}</p>
    </div>
@endforeach<?php