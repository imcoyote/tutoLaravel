@extends('layouts.master')

@section('content')
    <h1>register</h1>
    <hr>
    <form method="post" action="/register">
        {{ csrf_field() }}
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-12 cell">
                    <label>Name
                        <input name="name" type="text">
                    </label>
                </div>

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
                    <label>Password confirmation
                        <input name="password_confirmation" type="password">
                    </label>
                </div>

                <div class="medium-12 cell">
                    <div class="grid-x align-center">
                        <button type="submit" class="button large large-expanded">Register</button>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.errors')
    </form>
@endsection
