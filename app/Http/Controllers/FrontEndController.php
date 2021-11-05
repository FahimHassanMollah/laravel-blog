<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class FrontEndController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function post()
    {
        return view('partials.post');
    }

    public function showRegistrationForm()
    {
        return view('registration.registration');
    }

    public function dashboardShow(Request $request)
    {
        return view('dashboard.dashboard');
    }

    public function processRegistration(Request $request)
    {
          $validate = $request -> validate([
            'email' => 'required | email',
            'password' => 'required | min:4',
            'photo'=>'required|image|max:400'
          ]);

          $file = $request->file('photo');
          if ($request->file('photo')->isValid()) {
            $fileName = uniqid('image').Str::random(10).'.'.$request->file('photo')->extension();

            $request->file('photo')->storeAs('images',$fileName);
          }
        $request->session()->flash('message', 'Registration success');
          return redirect()->back();


        // $validator = Validator::make($request->all(),[
        //     'email' => 'required | email',
        //     'password' => 'required | min:6'
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }


    }
}
