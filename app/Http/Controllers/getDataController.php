<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class getDataController extends Controller
{
    //
    function getUserData(){
        return DB::select('select * from classlist');
        // return json_encode(DB::select('select * from classlist'));
        // return json_encode(DB::select('select * from classlist where id=3'));
        // return json_encode(DB::select("select * from classlist where firstname ='isiaka'"));
        // return json_encode(DB::select("select * from classlist where lastname = 'samuel'"));
        // return "hello world ,i am coming from the controller ,what next";
    }
}
