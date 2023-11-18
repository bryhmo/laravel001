<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    //
   /*  public function paginate(){
        $pages = Student::paginate(15);
        return $pages;
    } */
    function myPagination(){

        // $data = Student::all();
        $data = Student::paginate(25);

        return view('pagelist',['studentlist'=>$data]);
        // return json_encode($data);

        // return "hello guys the paginated page will be dispayed here";
    }
    public function deleteUser($id){

        $data = Student::find($id);

        $data->delete();

        return redirect('student.com');
    }
    function showUser($id){

        $dataedit = Student::find($id);
        return view('studentedit',['keyholder'=> $dataedit]);

    }
}
