<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DonorController extends Controller
{
    public function index()
    {
       return view('donor_register');
    }

    public function store(Request $req)
    {
        $donor = new Donor;
        $donor->name = $req->name;
        $donor->age = $req->age;
        $donor->phone_number = $req->phone_number;
        $donor->blood_group = $req->blood_group;
        $donor->email = $req->email;
        $donor->address = $req->address;
        $donor->save();

        return redirect()->route('home')->with('message', 'Thanks for registering as blood donator');
    }
}
