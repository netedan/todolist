<head>
    @foreach($projects as $project)
        <div>
            <a href="/projects/{{ $project->id }}">{{ $project->id }}</a>
            <p>{{ $project->authorId }}</p>
            {{--        <p>{{ $project->tasks }}</p>--}}
            <p>{{ $project->name }}</p>
        </div>
    @endforeach
</head>
<body>
<div class="base" id="buttons">
    <div>
        <label>Delete all projects?</label>
        <input type="checkbox" name="agree?">
    </div>
    <div>
        <form class="btn" id="agree">
            <input type="submit" value="Delete"
            style="height: 35px; width: 150px">

    </div>

</body>