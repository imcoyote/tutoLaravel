@extends('layouts.master')

@section('content')
    <div class="blog-post">
        <h1>{{ $post->title }}</h1>
        <p>By {{ $post->user->name }} on {{ $post->created_at->toFormattedDateString() }}</p>
        <p>{{ $post->body }}</p>
    </div>
    <hr>
    <div class="">
        <ul class="no-bullet">
            @foreach($post->comments as $comment)
                <li>
                    <strong>
                        <p>{{ $comment->created_at->diffForHumans() }} by {{ $post->user->name }}:</p>
                    </strong>
                    &nbsp
                    {{ $comment->body }}
                </li>
                <hr>
            @endforeach
        </ul>
    </div>
    <hr>
    <div class="">
        <form method="post" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}
            <div class="cell">
                <label>Your comment
                    <textarea name="body" id="" cols="30" rows="2" required minlength="2"></textarea>
                </label>
            </div>
            <div class="cell">
                <div class="grid-x align-center">
                    <button type="submit" class="button small large-expanded">Add comment</button>
                </div>
            </div>
            @include('layouts.errors')
        </form>
    </div>
@endsection
