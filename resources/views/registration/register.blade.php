@extends('components\layout')
@section('contents')

    <h1>Register</h1>

    <form action="/register" method="post">
        @csrf

        <label for="name">Username</label><br/>
        <input name="name" id="name" type="text" value="{{ old('name') }}"/>

        @error('name')
        <b style="color: red">{{ $message }}</b>
        @enderror
        <br/>

        <label for="email">Email</label><br/>
        <input name="email" id="email" type="email" value="{{ old('email') }}"/>

        @error('email')
        <b style="color: red">{{ $message }}</b>
        @enderror
        <br/>

        <label for="email_verify">Email Verify</label><br/>
        <input name="email_verify" id="email_verify" type="email" value="{{ old('email_verify') }}"/>

        @error('email_verify')
        <b style="color: red">{{ $message }}</b>
        @enderror
        <br/>

        <label for="password">Passsword</label><br/>
        <input name="password" id="password" type="password"/>

        @error('password')
        <b style="color: red">{{ $message }}</b>
        @enderror
        <br/>

        <label for="password_verify">Password Verify</label><br/>
        <input name="password_verify" id="password_verify" type="password"/>

        @error('password_verify')
        <b style="color: red">{{ $message }}</b>
        @enderror
        <br/>

        <br/>
        <input type="submit" value="Register"/>
    </form>

    <br/>
    <a href="/">Go Back</a>

@endsection
