<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    //
    public function getHttpRequest()
    {
        
        $httpdata =  Http::get("https://reqres.in/api/users?page=1");
        //  return $httpdata;
        return view('http',['people'=>$httpdata['data']]);
        // return "the Http request data will be display here";
    }
}
