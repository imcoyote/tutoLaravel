<div class="blog-post">
    <a href="/posts/{{ $post->id }}">
        <h3>{{ $post->title }}</h3>
    </a>
    <p><small>By {{ $post->user->name }} on {{ $post->created_at->toFormattedDateString() }}</small></p>
    <p>{{ $post->body }}</p>
</div>
