<div class="p-3">
    <h4 class="font-italic">Latest Movies</h4>
    <ol class="list-unstyled mb-0">
        @foreach ($movies as $movie)
            <li>
                <a href="/movies/{{ $movie->id }}">
                {{ $movie->title }}
                </a>
            </li>
        @endforeach
    </ol>
</div>