<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    //
    public function fetchUsersData()
    {
         $fetchUser = Employee::all('id','email','firstname');
        //  $fetchUser = Employee::all('email','firstname');
        //  $fetchUser = Employee::all('email');
         return json_encode($fetchUser);
        /* $fetchUser = Employee::find([2,3]);
        return json_encode($fetchUser); */
        // return json_encode(Employee::find(1,'password'));
        // return json_encode(Employee::find(2,'email'));
        // return json_encode(Employee::find([2,3]));
        // return json_encode(Employee::all());
    }
}
