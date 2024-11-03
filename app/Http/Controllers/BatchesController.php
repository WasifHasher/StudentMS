<?php

namespace App\Http\Controllers;
use App\Models\batche;
use App\Models\course;

use Illuminate\Http\Request;

class BatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = batche::get();
        return view('batches.batches',compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('batches.addBatches');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        batche::create($input);
        return redirect('/batches')->with('status','Your Data is Successfully added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $show_batche = batche::find($id);
        return view('batches.updateBatche',compact('show_batche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batches = batche::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('/batches')->with('status','Your Data is Successfully Updated.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         batche::destroy($id);
        return redirect('/batches')->with('status','Your Data is Successfully Deleted.');

    }
}
