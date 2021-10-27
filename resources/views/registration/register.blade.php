@extends('components\layout')
@section('contents')

    <h1>Register</h1>

    <form action="/register" method="post">
        <label for="username">Username</label><br/>
        <input name="username" id="username" type="text"/><br/>

        <label for="email">Email</label><br/>
        <input name="email" id="email" type="email"/><br/>

        <label for="email_verify">Email Verify</label><br/>
        <input name="email_verify" id="email_verify" type="email"/><br/>

        <label for="password">Passsword</label><br/>
        <input name="password" id="password" type="password"/><br/>

        <label for="password_verify">Password Verify</label><br/>
        <input name="password_verify" id="password_verify" type="password"/><br/>

        <br/>
        <input type="submit" value="Register"/>
    </form>

@endsection
