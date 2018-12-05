@extends('layouts.master')

@section('content')
    <h1>Publish a post</h1>
    <hr>
    <form method="post" action="/posts">
        {{ csrf_field() }}
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-12 cell">
                    <label>Title
                        <input name="title" type="text">
                    </label>
                </div>

                <div class="medium-12 cell">
                    <label>Body
                        <textarea name="body" id="" cols="30" rows="10"></textarea>
                    </label>
                </div>
                <div class="medium-12 cell">
                    <div class="grid-x align-center">
                        <button type="submit" class="button large large-expanded">Publish</button>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.errors')
    </form>
@endsection
