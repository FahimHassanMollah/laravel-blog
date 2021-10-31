<?php

namespace App\Http\Controllers;

use App\Models\User;

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
            'email'=> 'required|email|unique:users,email',
            'phone_number'=> 'required|numeric|min:11|unique:users,phone_number',
            'password'=> 'required|confirmed'
        ]);

        $data = [
            'full_name'=>$request->input('full_name'),
            'email'=>$request->input('email'),
            'phone_number'=>$request->input('phone_number'),
            'password'=>bcrypt($request->input('password'))

        ];

        try {
            User::create($data);
            $request->session()->flash('message','Registration success');
            $request->session()->flash('type','success');
            return redirect()->back();
            // return redirect(route('login'));

        } catch (\Exception $e) {
            $request->session()->flash('message',$e->getMessage());
            $request->session()->flash('type','error');
            return redirect()->back();
            // dd($e);
        }
    }

    public function showLoginForm()
    {

    }

    public function processLogin()
    {

    }
}
