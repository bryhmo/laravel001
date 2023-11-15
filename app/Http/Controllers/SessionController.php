<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function GetSessionData(Request $request)
    {
        $GetInputData = $request->input();
        $request->session()->put('myHolder',$GetInputData['firstname']);
        return redirect('sepro.com');
        // echo session('myHolder');
        // return json_encode($GetInputData);
        
    }
}
