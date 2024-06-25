<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cpf' => 'required|string|max:14|unique:users',
            'age' => 'required|integer',
            'gender' => 'required|string|max:10',
            'phone' => 'required|string',
            'cep' => 'required|string|max:8',
            'address' => 'required|string|max:255',
            'number' => 'required|string',
            'neighborhood' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'cep' => $request->cep,
            'address' => $request->address,
            'number' => $request->number,
            'neighborhood' => $request->neighborhood,
            'city' => $request->city,
            'state' => $request->state,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('me');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'cpf', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('me');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form');
    }

    public function me()
    {
        $user = Auth::user();
        return view('auth.me', compact('user'));
    }
}

