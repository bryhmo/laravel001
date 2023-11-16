<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMemberController extends Controller
{
    //funtion to add member
    public function AddMember(Request $request)
    {
        // session()->flash('username');
        $DataInput = $request->input('username');
        session()->flash('username',$DataInput);
                //   or
        // $request->session()->flash('username',$DataInput);
        return redirect('add.com');
        // return json_encode($DataInput);
        // $request->session()->flash('status', 'Task was successful!');
    }
}
