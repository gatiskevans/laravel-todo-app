@extends('components/layout')
@section('contents')

    <h1>Tasks</h1>

    @foreach($tasks->all() as $task)
        <a href="task/{{ $task->id }}">{{ $task->task }}</a><br/>
    @endforeach

@endsection
