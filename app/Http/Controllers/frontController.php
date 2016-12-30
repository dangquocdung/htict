<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DichVu;


class frontController extends Controller
{
    function __construct()
    
    {	
        $dichvu = DichVu::all();
        view()->share('dichvu',$dichvu); 
    }


    function getIndex(){

    	return view('index');

    }

    

}
