<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    public function index(){
        $courses = course::get();
        return view('courses.courses',compact('courses'));
    }


    public function SaveCourse(Request $req){

        $req->validate([
            'name' => 'required',
            'syllabus' => 'required',
            'duration' => 'required'
        ]);

        $course = DB::table('courses')->insert([
            'name' => $req->name,
            'syllabus' => $req->syllabus,
            'duration' => $req->duration,

        ]);

        if($course){

             return redirect('/courses')->with('status','Your data is Successfully added');

        }
    }

    public function SeeUpdatePage(string $id){

        $course = course::find($id);
        return view('courses.courseUpdate',compact('course'));

    }


   


    public function SaveUpdateRecord(Request $req, string $id)
{
    $req->validate([
        'name' => 'required',
        'syllabus' => 'required',
        'duration' => 'required'
    ]);

    // Find the course record
    $course = Course::find($id);

    if ($course) {
        // Update the properties
        $course->name = $req->name;
        $course->syllabus = $req->syllabus;
        $course->duration = $req->duration;
        
        // Save the updated course
        $course->save();

        return redirect('/courses')->with('status', 'Your data has been successfully updated');
    } else {
        return redirect('/courses')->with('error', 'Course not found');
    }
}


    public function deleteRecord(string $id){
        $delete = course::find($id);
        $delete->delete();
        return redirect('/courses')->with('status', 'Your data has been successfully Deleted');

    }


}
