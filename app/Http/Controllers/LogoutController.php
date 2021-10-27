<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(): RedirectResponse
    {
        auth()->logout();

        return redirect('/')->with('success', 'Logged Out Successfully');
    }
}
