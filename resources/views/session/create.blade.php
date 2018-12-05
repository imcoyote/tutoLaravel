@extends('layouts.master')

@section('content')
    <h1>Sign in</h1>
    <form action="/login" method="POST">
        {{ csrf_field() }}
        <div class="medium-12 cell">
            <label>Email
                <input name="email" type="email">
            </label>
        </div>

        <div class="medium-12 cell">
            <label>Password
                <input name="password" type="password">
            </label>
        </div>
        <div class="medium-12 cell">
            <div class="grid-x align-center">
                <button type="submit" class="button large large-expanded">Sign in</button>
            </div>
        </div>
    </form>
@endsection