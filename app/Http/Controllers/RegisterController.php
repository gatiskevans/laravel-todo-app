<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(): View
    {
        return view('registration.register');
    }

    public function store(): RedirectResponse
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],  //can also be written as Rule::unique('users', 'email');
            'email_verify' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:6', 'max:255'],
            'password_verify' => ['required', 'min:6', 'max:255']
        ]);

        if
        (
            $attributes['password'] !== $attributes['password_verify'] ||
            $attributes['email'] !== $attributes['email_verify']
        )
        {
            return redirect('register');
        }

        $user = User::create($attributes);

        auth()->login($user);   //Logs user in

        //session()->flash('success', 'Your account has been created.');

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
