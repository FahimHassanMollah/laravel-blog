<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'full_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|numeric|min:11|unique:users,phone_number',
            'password' => 'required|confirmed'
        ]);

        $data = [
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'password' => bcrypt($request->input('password'))

        ];

        try {
            User::create($data);
            $request->session()->flash('message', 'Registration success');
            $request->session()->flash('type', 'success');
            return redirect()->back();
            // return redirect(route('login'));

        } catch (\Exception $e) {
            $request->session()->flash('message', $e->getMessage());
            $request->session()->flash('type', 'error');
            return redirect()->back();
            // dd($e);
        }
    }

    public function showLoginForm()
    {
        return view('auth.login.login');
    }

    public function processLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
         {
            $request->session()->flash('message', 'Registration success');
            $request->session()->flash('type', 'success');
             return redirect(route('dashboard'));
        }
        else{
            $request->session()->flash('message', 'wrong email or password');
            $request->session()->flash('type', 'error');
            return redirect()->back();
        }
    }
    public  function logout(Request $request){
        $request->session()->flash('type', 'success');
        $request->session()->flash('message', 'logout done');
        auth()->logout();
        return redirect(route('login'));
    }
}
