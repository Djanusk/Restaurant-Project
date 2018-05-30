<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index()
    {
        return view('login');
    }

    function checklogin(Request $request)
    {
        //Checks the validity of email and password
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'    => $request->get('email'),
            'password' => $request->get('password')
        );

        //If Validation successful execute
        if(Auth::attempt($user_data))
        {
            return redirect('main/successlogin');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function successlogin()
    {
        return view('index');
    }

    function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
