<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insurance;
use App\Car;
use App\Package;

class InsuranceController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $insurances = Insurance::where('user_id', auth()->id())->get();
        return view('insurances.index', compact('insurances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = auth()->id();
        $cars = Car::where('user_id', $user)->get();
        $packages = Package::all();

        return view('insurances.new', compact('cars', 'packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $insurance['user_id'] =  auth()->id();
        $insurance['car_id'] = $request->car_id;
        $insurance['package_id'] = $request->package_id;
        $insurance['validity'] = $request->validity;

        Insurance::create($insurance);

        return redirect('insurances');
    }


}
