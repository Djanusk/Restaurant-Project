<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Booking;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name','asc')->paginate(5);
        return view('home')->with('users', $users);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'people' => 'required',
            'date' => 'required',
            'time' => 'required',
            'smokers' => 'required',
        ]);

        // Create Post
        $booking = new Booking;
        $booking->name = $request->input('name');
        $booking->people = $request->input('people');
        $booking->user_id = auth()->user()->id;
        $booking->date = $request->input('date');
        $booking->time = $request->input('time');
        $booking->time = $request->input('smokers');
        $booking->save();

        return redirect('home');
    }

    public function logout()
    {
        return redirect('login');
    }
}
