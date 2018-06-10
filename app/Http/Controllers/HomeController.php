<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Car;
use App\Claim;
use App\Insurance;

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
        $user = auth()->id();
        $car = Car::where('user_id',$user);
        $insurance = Insurance::where('user_id', $user);
        $claim = Claim::where('user_id', $user);
        return view('home', [
            'user' => $user,
            'car' => $car,
            'insurance' => $insurance,
            'claim' => $claim,
        ]);
    }
}
