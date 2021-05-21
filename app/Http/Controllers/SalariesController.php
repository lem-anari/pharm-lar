<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalariesController extends Controller
{
    public function get_ApiSalaryFines(Request $request)
    {
        $user_id = $request->only('user_id');
        $id = $user_id['user_id'];
        $salary = \App\Salary::all()->where('employee_id', '=', $id);
        $salary_user = $salary->pluck('salary');
        
        $month = \Carbon\Carbon::now()->format('M');
        $nmonth = date("m", strtotime($month));
        require_once __DIR__.'../../../../queries.php';
        $fines_month = statempfinesmonth($dbh, $user_id['user_id'], $nmonth);

        return response()->json([
            'fines_month' => $fines_month,
            'salary' => $salary_user
        ], 200);
    }
    public function get_ApiSalaryBonuses(Request $request)
    {
    }
    public function get_ApiSalary(Request $request)
    {
    }
}
