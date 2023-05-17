<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function auth()
    {
        return Inertia::render('Auth/Index');
    }

    public function check(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8'
            ],
            [
                'email.required' => 'Email invalid!',
                'password.required' => 'Password invalid!'
            ]
        );

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) return redirect('/');
        else return redirect('/auth');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|min:8',
            ],
        );

        User::create(['name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password)]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) return redirect('/');
    }
}
