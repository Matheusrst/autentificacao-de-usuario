<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

//controller de autentificação
class AuthController extends Controller
{
    //view da listagem de ususários
    public function index()
    {
    $users = User::all();
    return view('auth.users', compact('users'));
    }

    //view para o menu de usuário
    public function show($id)
    {
    $user = User::findOrFail($id);
    return view('auth.me', compact('user'));
    }

    //view para cadastro de usuário
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    //função para o registro de de novos usuários
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cpf' => 'required|string|max:14|unique:users',
            'age' => 'required|integer',
            'gender' => 'required|string|max:10',
            'phone' => 'required|string',
            'cep' => 'required|string|max:9',
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

        return redirect()->route('users.index');
    }

    //view para edição de usuários
    public function edit($id)
    {
    $user = User::findOrFail($id);
    return view('auth.edit', compact('user'));
    }

    //função de edição de usários
    public function update(Request $request, $id)
    {
    $user = User::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'cpf' => 'required|string|max:14|unique:users,cpf,' . $user->id,
        'age' => 'required|integer',
        'gender' => 'nullable|string|max:10',
        'phone' => 'nullable|string|max:15',
        'cep' => 'nullable|string|max:9',
        'address' => 'nullable|string|max:255',
        'number' => 'nullable|string|max:10',
        'neighborhood' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'state' => 'nullable|string|max:2',
    ]);

    $user->update([
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
        
    ]);

    return redirect()->route('users.index')
                     ->with('success', 'User updated successfully');
    }

    //função para apagar um usuários cadastrados
    public function destroy($id)
    {
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users.index')
                     ->with('success', 'User deleted successfully');
    }

}

