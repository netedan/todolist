@foreach($tags as $tag)
    <div>
        Tag ID: <a href="/tags/{{ $tag->id }}">{{ $tag->id }}</a>
        <p>Tag name: {{ $tag->name }}</p>
    </div>
@endforeach