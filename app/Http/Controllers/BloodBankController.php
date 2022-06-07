<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class BloodBankController extends Controller
{
    public function index()
    {
        $donors = Donor::latest()->get();
        return view('blood_bank')->with('donors', $donors);
    }
}
