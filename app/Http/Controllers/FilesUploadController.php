<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FilesUploadController extends Controller
{
    //upload file 
    function FileUpload(Request $request)
    {
        $myfile = $request->file('photo');
        dd($myfile);
        /* $myfilename = $myfile->getClientOriginalName();
        $fileextension =$myfile->getClientOriginalExtension();
        $filepath = 'photos'.'/';
        $myfile->move($filepath,$myfilename);
        return $myfile; */
     
        /* 
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $destinationPath = 'storage/images'.'/';
            $file->move($destinationPath, $filename);
            return $file;
        }
         */
        /* $fileHolder = $request->file('photo')->store('photos');
        return $fileHolder; */
    }
//    function getfileuploaded(Request $request)
//    {

//    }
}
