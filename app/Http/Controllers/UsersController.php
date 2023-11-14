<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function getData(Request $request){
        $request->validate([
            'username'=>'required|min:3|max:15',
            'password' =>'required|min:5|max:10'
        ]);
        return $request->input();
    }

    //getting users info
    function getUserInfo(Request $req)
    {
        $req->validate([
            
            'firstname'=>'required|min:3|max:10',

            'lastname'=>'required|min:3|max:10',

            'email'=>'required|email',

            'password'=>'required|min:3|max:10',

            'confirmpassword'=>'required|min:3|max:10'
        ]);

        return $req->input();
        

    }



}
