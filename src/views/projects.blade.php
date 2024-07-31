@foreach($projects as $project)
    <div>
        <a href="/projects/{{ $project->id }}">{{ $project->id }}</a>
        <p>{{ $project->authorId }}</p>
{{--        <p>{{ $project->tasks }}</p>--}}
        <p>{{ $project->name }}</p>
    </div>
@endforeach