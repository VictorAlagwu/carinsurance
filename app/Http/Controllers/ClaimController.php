<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Claim;
use App\Car;
use App\Insurance;

class ClaimController extends Controller
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
        $claims = Claim::where('user_id', auth()->id())->get();
        return view('claims.index', compact('claims'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $insurances = Insurance::where('user_id', auth()->id())->get();
        return view('claims.new', compact('insurances'));
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
        $claim['user_id'] = auth()->id();
        $claim['car_id'] = $request->car_id;
        $claim['status'] = "pending";

        Claim::create($claim);

        return redirect('claims');
    }

   
}
