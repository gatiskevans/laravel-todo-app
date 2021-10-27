@extends('components/layout')
@section('contents')

    <form method="post" action="/login">
        @csrf
        <label for="email">Enter Email: </label><br/>
        <input type="email" name="email" id="email" value="{{ old('email') }}"/>

        @error('email')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br/>

        <label for="password">Enter Password: </label><br/>
        <input type="password" name="password" id="password"/>

        @error('password')
        <span style="color: red">{{ $message }}</span>
        @enderror
        <br/><br/>

        <input type="submit" value="Login"/>
    </form>

    <br/>
    <a href="/">Go Back</a>

@endsection
