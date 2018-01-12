<div>
    <h2>
        <a href="/locations/{{ $location->id }}">
            {{ $location->title }}
        </a>
    </h2>
    <p>
        {{ $location->created_at->toFormattedDateString() }}
    </p>
</div>