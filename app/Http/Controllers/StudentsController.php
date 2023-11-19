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
        $data = Student::paginate(15);

        return view('pagelist',['studentlist'=>$data]);
        // return json_encode($data);

        // return "hello guys the paginated page will be dispayed here";
    }

    //functions for the deletion of the student fro the database
    public function deleteUser($id){

        $data = Student::find($id);

        $data->delete();

        return redirect('student.com');
    }

    //function for the students records edit
    function showUser($id){
        $dataedit = Student::find($id);
        return view('edit',['keyholder'=> $dataedit]);
        // return view('studentedit',['keyholder'=> $dataedit]);
    }

    //function for the update of the students records 
    function updateUser(Request $request){
        // retunr $request->input();
        $UpdateData = Student::find($request->id);
        $UpdateData->lastname = $request->lastname;
        $UpdateData->firstname = $request->firstname;
        $UpdateData->othername = $request->othername;
        $UpdateData->studentid = $request->studentid;
        $UpdateData->semester = $request->semester;
        $UpdateData->email = $request->email;
        $UpdateData->phone = $request->phone;
        $UpdateData->save();
        return redirect('student.com');
    }

    //creating a new users
    public function AddUser(Request $request){
        // return "the new users form will be"
        $data = new Student();
        $data->lastname = $request->lastname;
        $data->firstname = $request->firstname;
        $data->othername = $request->othername;
        $data->studentid = $request->studentid;
        $data->semester = $request->semester;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->save();
        return redirect('student.com');
    }
}
