@extends('components/layout')
@section('contents')

    @auth

    <h1>Tasks</h1>

    @foreach($tasks->all() as $task)
        <a href="task/{{ $task->id }}">{{ $task->task }}</a><br/>
    @endforeach

    <br/>

        <span>Welcome, {{ auth()->user()->name }}!</span><br/>
        <span>Your email is {{ auth() ->user()->email }}</span><br/>

        <br/>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Log Out</button>
        </form>

    @else
        <a href="/login">Login</a><br/>
        <a href="/register">Register</a>
    @endauth

@endsection
