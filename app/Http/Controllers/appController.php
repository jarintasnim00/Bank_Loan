<?php

namespace App\Http\Controllers;
use App\app_from;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function insert(Request $request){
   
        $app = new app_from;
        $app->loan_type = $request->loan_type;
        $app->title = $request->title;
        $app->name = $request->name;
        $app->dob = $request->dob;
        $app->gender = $request->gender;
        $app->nationality = $request->nationality;
        $app->residentstatus = $request->residentstatus;
        $app->current_time = $request->current_time;
        $app->phone_number = $request->phone_number;
        $app->employed = $request->employed;
        $app->employee_type = $request->employee_type;
        $app->employer_current_time = $request->employer_current_time;
        $app->employement_length = $request->employement_length;
        $app->monthly_income = $request->monthly_income;
        $app->bank_connection = $request->bank_connection;
        $app->current_time = $request->current_time;
        $app->account_maintaining_time = $request->account_maintaining_time;
        $app->save();

        return redirect()->route('show');

    }



     public function show()
    {
        $app = app_from::all();
       return view('show')->with('app', $app);
        
    }
     public function show1()
    {
        $app = app_from::all();
       return view('aplieduser')->with('app', $app);
        
    }
}
