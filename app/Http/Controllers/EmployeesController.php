<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function __invoke()
    {
        
        return view('employees',['employees'=>\App\Employee::all()]);
    }
    public function get_ApiEmployees()
    {
        return response()->json([
            'employees' => \App\Employee::all(),
        ], 200);
    }
}
