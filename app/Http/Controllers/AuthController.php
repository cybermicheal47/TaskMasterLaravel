<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //

    public function login(Request $request) {
        return view('auth.login');
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //attempt to login User
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'You are now logged in!');
        }
        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }










    public function register(Request $request) {
        return view('auth.register');
    }


    public function store (Request $request) {
       $validateData =  $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

        ]);
       //hash the password

        $validateData['password'] = Hash::make($validateData['password']);
        // create new user
         $user = User::create($validateData);
        // Flash success message
        Session::flash('success', 'Registration successful! You can now log in.');


// Authenticate user
        Auth::login($user);
        // redirect to the homepage
        return  redirect('/')->with('success', 'Registration successful You can now log in!');
    }



    public function logout(Request $request): RedirectResponse
    {
        Auth::logout(); // Log out the user

        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect()->route('home');
    }




}
