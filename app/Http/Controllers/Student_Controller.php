<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class Student_Controller extends Controller
{
    public function index(){
        $students = student::get();
        return view('mainFolder.student',compact('students'));
    }

   
    public function SaveRecord(Request $request) {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required|numeric|digits:11',
            'gender' => 'required'
        ]);
    
        $save = new Student;  // Capitalize the model name
    
        $save->name = $request->name;
        $save->address = $request->address;
        $save->mobile = $request->mobile;
        $save->gender = $request->gender;
    
        $save->save();
    
        return redirect('/student')->with('status', 'Your data has been successfully added.');
    }


    public function SeeUpdatePage(string $id){

        $updateData = student::find($id);
        return view('mainFolder.updateRecord',compact('updateData'));

    }

    public function SaveUpdateRecord(Request $req, string $id){

        $req->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'gender' => 'required'
        ]);
    
        $save = Student::find($id);  // Capitalize the model name
    
        $save->name = $req->name;
        $save->address = $req->address;
        $save->mobile = $req->mobile;
        $save->gender = $req->gender;
    
        $save->update();
    
        return redirect('/student')->with('status', 'Your data has been successfully Updated.');

    }

    public function deleteRecord(string $id){
        $delete = student::find($id);
        $delete->delete();

        return redirect('/student')->with('status','Your Data is Successfully Deleted');
    }
    
}
