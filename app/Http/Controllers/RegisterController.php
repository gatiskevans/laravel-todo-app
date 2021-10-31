<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
                'required_with:email_verify',
                'same:email_verify'
            ],
            'email_verify' => ['required', 'email', 'max:255'],
            'password' => [
                'required',
                'min:6',
                'max:255',
                'required_with:password_confirmation',
                'same:password_confirmation'
            ],
            'password_verify' => ['required', 'min:6', 'max:255']
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
