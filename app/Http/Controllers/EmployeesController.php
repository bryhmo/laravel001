<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Http;

class EmployeesController extends Controller
{
    //
    public function fetchUsersData()
    {
        $fetchUser = (Employee::all());
        return view('employee',['dbdata'=>$fetchUser]);
        // return json_encode($fetchUser);
        //  $fetchUser = Employee::all('id','email','firstname');
        //  $fetchUser = Employee::all('email','firstname');
        //  $fetchUser = Employee::all('email');
         
        /* $fetchUser = Employee::find([2,3]);
        return json_encode($fetchUser); */
        // return json_encode(Employee::find(1,'password'));
        // return json_encode(Employee::find(2,'email'));
        // return json_encode(Employee::find([2,3]));
        
    }

    function getHttpRequest()
    {
       $response = Http::get('http://example.com');
       return $response;
    }
}
