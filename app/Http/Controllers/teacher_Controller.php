<?php

namespace App\Http\Controllers;
use App\Models\teacher;

use Illuminate\Http\Request;

class teacher_Controller extends Controller
{
    public function index(){
        $teacher = teacher::get();
        return view('teacher.teacher',compact('teacher'));
    }


    public function storeTeacherData(Request $req){

        $req->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'gender' => 'required',
            'Qualification' => 'required',
            'Experience' => 'required'
        ]);

    $save = new teacher;

    $save->name = $req->name;
    $save->address = $req->address;
    $save->mobile = $req->mobile;
    $save->gender = $req->gender;
    $save->Qualification = $req->Qualification;
    $save->Experience = $req->Experience;

    $save->save();

    return redirect('/teacher')->with('status','Your Data is Successfully added.');
    }

    public function showSingleRecord(string $id){
        $showteacher = teacher::find($id);
        return view('teacher.updateTeacherPage',compact('showteacher'));
    }

    public function StoreUpdateRecord(Request $req, string $id){

        $req->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'gender' => 'required',
            'Qualification' => 'required',
            'Experience' => 'required'
        ]);

    $save = teacher::find($id);

    $save->name = $req->name;
    $save->address = $req->address;
    $save->mobile = $req->mobile;
    $save->gender = $req->gender;
    $save->Qualification = $req->Qualification;
    $save->Experience = $req->Experience;

    $save->update();
    return redirect('/teacher')->with('status','Your Data is Successfully Updated.');

    }


    public function deleteRecord(string $id){
        $delete = teacher::find($id);
        $delete->delete();

        return redirect('/teacher')->with('status','Your Data is Successfully Deleted.');

    }


}
