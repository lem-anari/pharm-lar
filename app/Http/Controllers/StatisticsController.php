<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function __invoke()
    {
        
        return view('statistics');
    }
}
