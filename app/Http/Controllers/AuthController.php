<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register.register');
    }

    public function processRegistration(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'full_name'=>'required',
            'email'=> 'required|email',
            'phone_number'=> 'required|numeric|min:11',
            'password'=> 'required|confirmed'
        ]);
        dd($request->all());
    }

    public function showLoginForm()
    {

    }

    public function processLogin()
    {

    }
}
