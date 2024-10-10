<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
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
}
