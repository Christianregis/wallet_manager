<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['email' => 'Identifiants invalides.']);
        }

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'avatar' => $validatedData['avatar'] ?? null,
            'phone' => $validatedData['phone'],
            'password' => $validatedData['password'],
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            $user->delete();
            return redirect()->route('login')->with('success', 'Suppression reussie !');
        }else{
            return back()->withErrors("Vous n'etes pas autorise !");
        }
    }
}
