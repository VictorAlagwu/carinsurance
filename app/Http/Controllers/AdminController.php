<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Insurance;
use App\Claim;
use App\User;
use App\Package;

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
   
    public function claimApprove($id)
    {
        //
       
        $claim = Claim::findOrFail($id);
        
        $claim->status = "approved";
        $claim->save();
        return back();
    }

    public function claimReject($id)
    {
        //
       
        $claim = Claim::findOrFail($id);
        
        $claim->status = "pending";
        $claim->save();
        return back();
    }

    public function viewPackages()
    {
        $packages = Package::all();
        return view('admin.packages', compact('packages'));
    }

    public function storePackages(Request $request)
    {
        $package['name'] = $request->name;
        $package['amount'] = $request->amount;
        Package::create($package);

        return back();
    }
}
