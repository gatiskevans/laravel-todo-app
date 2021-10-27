@extends('components/layout')
@section('contents')

    @auth
        <h1>{{ $task->task }}</h1>

        <strong>Id: </strong>{{ $task->id }}<br/>
        <strong>Status: </strong>{{ $task->status }}<br/>
        <strong>Created At: </strong>{{ $task->created_at }}<br/>
        <strong>Updated At: </strong>{{ $task->updated_at }}<br/>
    @endauth

    <br/>
    <a href="/">Go Back</a>

@endsection
