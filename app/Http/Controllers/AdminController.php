<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Insurance;
use App\Claim;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::all();
        $insurances = Insurance::all();
        $claims = Claim::all();
        $users = User::all();

        return view('admin.index',[
            'cars' => $cars,
            'insurances' => $insurances,
            'claims' => $claims,
            'users' => $users,
        ]);
    }

    public function viewCars()
    {
        $cars =  Car::all();
        return view('admin.cars', compact('cars'));
    }

    public function viewInsurances()
    {
        $insurances = Insurance::all();
        return view('admin.insurances', compact('insurances'));
    }

    public function viewClaims()
    {
        $claims = Claim::all();
        return view('admin.claims', compact('claims'));
    }

    public function updateClaims(Request $request, $id)
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
