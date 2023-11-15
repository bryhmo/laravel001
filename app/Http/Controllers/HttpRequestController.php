<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpRequestController extends Controller
{
    //
    public function HttpRequest(Request $request){
        $ubmitvalue = $request->input();
        return json_encode($ubmitvalue);
        // return view('httprequest');
        // return "we are learning, the HTTPRequestMethod";
    }
}
