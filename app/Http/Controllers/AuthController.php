<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // Assign the role based on your logic
        if ($request->email === 'admin@admin.com') {
            $user->role = 'admin'; // Assign 'admin' role to the user with specific email
        } else {
            $user->role = 'user'; // Default role is 'user' for other users
        }

        $user->save();

        return back()->with('success', 'Registered successfully');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect('/dashboard')->with('success', 'Login success');
            } else {
                return redirect('/home')->with('success', 'Login success');
            }
        }

        return back()->with('error', 'Invalid email or password');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
