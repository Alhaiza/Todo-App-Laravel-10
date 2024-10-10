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
        return view(
            'pages.login',
            ['title' => 'Login']
        );
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        return back()->with('loginError', 'Login Failed, Check Your Email and Password Again!');
    }

    public function register()
    {
        return view(
            'pages.register',
            ['title' => 'Register']
        );
    }

    public function storeAccount(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5'
            ]
        );

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect(route('login'))->with('success', 'Registration success! Please Login!');
    }

    public function logout(Request $request)
    { {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        }
    }
}
