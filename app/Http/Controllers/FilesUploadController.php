<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesUploadController extends Controller
{
    //upload file 
    function FileUpload(Request $request)
    {
       
        // $path = $request->file('photo')->storeAs(
        //     'pictures', $request->user()->id
        // );

        /* 
        $path = $request->file('photo')->store('images');
 
        return $path; */


        $data= $request->getClientOriginalName()->getClientOriginalExtension()->file('avatar')->store('imgs');
 
    //    $name = $data->getClientOriginalName();
    //    $extension = $data->getClientOriginalExtension();
       
    }
}
