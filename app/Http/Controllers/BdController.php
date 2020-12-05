<?php

namespace App\Http\Controllers;

use App\Bankname;
use Illuminate\Http\Request;

class BdController extends Controller
{
    public function bdbank()
    {
        return view('bdbank');
    }


    public function search($searchKey)
    {
    	$banknames = Bankname::search('$searchKey')->get();
    	   
    	 ///  return view('search',compact('banknames'));
    	
    }


}
