<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view("pages.auth.login");
    }

    public function login(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $remember = $request->remember;
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with("fail", "Wrong username or password.");
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('home');
        }
        return redirect()->back();
    }
}
