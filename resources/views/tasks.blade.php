@extends('components/layout')
@section('contents')

    <h1>Tasks</h1>

    @foreach($tasks->all() as $task)
        <a href="task/{{ $task->id }}">{{ $task->task }}</a><br/>
    @endforeach

    <br/>
    <a href="/register">Register</a>

@endsection
