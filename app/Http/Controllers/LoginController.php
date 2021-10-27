<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLogin(): View
    {
        return view('login.login');
    }

    public function login(): RedirectResponse
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'exists:users,email'],  //could be a security issue
            'password' => ['required']
        ]);

        if(auth()->attempt($attributes))
        {
            session()->regenerate();
            return redirect('/')->with('success', 'Login Successful');
        }

        throw ValidationException::withMessages(
            ['email' => 'Login Credentials Are Incorrect']
        );
    }
}
