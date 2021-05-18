<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditsController extends Controller
{
    public function __invoke()
    {
        return view('audits',['audits'=>\App\Audit::all()]);
    }
    public function get_ApiAudits()
    {
        return response()->json([
            'audits' => \App\Audit::all(),
        ], 200);
    }
    public function get_ApiAuditUser(Request $request)
    {
        $user_id = $request->only('user_id');
        $all_audits = \App\Audit::all();
        $userN = $user_id['user_id'];
        $auditUsr = \App\Audit::all()->where('employee_id', '=', $userN);
        
        $pharm = array();
        for($a=0; $a<count($auditUsr); $a++){
            $name_future = \App\Pharmacy::all()->where ('id', '=', $auditUsr->pluck('pharmacy_id')[$a]);
            array_push($pharm, $name_future->pluck('nameofpharm'));
        }


        return response()->json([
         'auditUser' => $auditUsr,
         'pharm' => $pharm
        ], 200);
    }
}
