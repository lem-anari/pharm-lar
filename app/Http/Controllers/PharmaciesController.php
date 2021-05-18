<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmaciesController extends Controller
{
    public function __invoke()
    {
        return view('pharmacies',['pharmacies'=>\App\Pharmacy::all()]);
    }
    public function get_ApiPharmacies()
    {
        // return view('pharmacies',['pharmacies'=>\App\Pharmacy::all()]);
        return response()->json([
            'pharmacies' => \App\Pharmacy::all(),
        ], 200);
    }
}
