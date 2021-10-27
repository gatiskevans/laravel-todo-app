<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class RegisterController extends Controller
{
    public function register(): View
    {
        return view('registration.register');
    }

    public function store(): RedirectResponse
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'email_verify' => ['required', 'email'],
            'password' => ['required', 'min:6'],
            'password_verify' => ['required', 'min:6']
        ]);

        User::create($attributes);

        return redirect('/');
    }
}
