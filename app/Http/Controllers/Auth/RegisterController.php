<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Services\UserServices;

class RegisterController extends Controller
{
    public function show()
    {
        return view("pages.auth.register");
    }

    public function register(RegisterRequest $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->avatar = UserServices::getAvatar($request->name);
        $user->save();

        return redirect()->back()->with("message", "success");
    }
}
