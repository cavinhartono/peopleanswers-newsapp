<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function check(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8'
            ],
            [
                'email.required' => 'Email harus disesuaikan.',
                'password.required' => 'Password harus disesuaikan.'
            ]
        );

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $name = explode(' ', trim(Auth::user()->name))[0];
            return redirect('/dashboard')->with('success', "Selamat kembali, $name.");
        } else {
            return redirect('/login')->with('fail', 'Email dan Password harus disesuaikan.');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|min:8',
            ],
            [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.unique' => 'Email sudah ada, mohon isi lagi',
                'password.required' => 'Password harus diisi',
                'password.min' => 'Password harus disesuaikan minimal 8 karakter',
            ]
        );

        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $name = explode(' ', trim(Auth::user()->name))[0];
            return redirect('/dashboard')->with('success', "Selamat datang, $name.");
        } else {
            return redirect('/register')->with('fail', 'Email dan Password harus disesuaikan.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
