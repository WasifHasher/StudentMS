<?php

namespace App\Http\Controllers;
use App\Models\enrollment;

use Illuminate\Http\Request;

class enrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = enrollment::get();
        return view('enrollment.enrollment',compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrollment.addenrollment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        enrollment::create($input);
        return redirect("/enrollments")->with('status','Your data is Successfully added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $show = enrollment::find($id);
        return view('enrollment.enrollmentUpdate',compact('show'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollment = enrollment::find($id);
        $input = $request->all();
        $enrollment->update($input);
        return redirect("/enrollments")->with('status','Your data is Successfully Updated.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        enrollment::destroy($id);
        return redirect('/enrollments')->with('status','Your data is Successfully Deleted');

    }
}
