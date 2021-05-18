<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\Auth\RegisterFormRequest;
use App\User;
use App\Employee;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function __invoke(RegisterFormRequest $request)
    {
        $string = '';
        foreach ($request->only('name')  as $value){
           $string .=  $value;
        }
        $employee = new Employee();
        $employee->position = 'staff';
        $employee->fullname = $string;
        $employee->salaryrate = 8000;
        $employee->geolocation = 'geolocation';
        // $employee->news = 'news';
        $employee->save();

        $user = User::create(array_merge(
            $request->only('name', 'email'),
            ['password' => Hash::make($request->password), 'role_' => 2, 'employee_id' => $employee['id']]
        ));
        
        // try {
        //     // dd('true employeeee', $employee);
        //     $employee->save();
        // } catch (\Exception $e) {
        //     // dd('employeeee', $employee);
        //     // return view('redaction/error', ['err'=>"Время занято"]);
        // }
        
        // dd($user);
        return response()->json([
            'message' => 'You were successfully registered. Use your email and password to sign in.',
            'token' => Str::random(60),
            // 'name' =>
            // 'emp_id' => $employee['id']
        ], 200);
    }
}
