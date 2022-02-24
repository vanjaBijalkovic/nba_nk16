<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function getRegisterForm()
    {
        return view('auth.register');
    }

    public function create(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        auth()->login($user);

        return redirect('/');
    }

    public function getLoginForm ()
    {
        return view('auth.login',['invalid_credentials' => false ]);
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->get('email'), 
            'password' => $request->get('password')
        ];

        if (auth()->attempt($credentials)) {
            return redirect('/');
        }

        return view('auth.login', ['invalid_credentials' => true ]);
    }

    public function logout() 
    {
        auth()->logout();

        return redirect('/login');
    }
}
