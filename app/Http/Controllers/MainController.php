<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;

class MainController extends Controller
{
    function index()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }

    function checkregister()
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
            return redirect('main/home');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function home()
    {
        $users = User::orderBy('name','asc')->paginate(5);
        return view('index')->with('users', $users);
    }

    function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
