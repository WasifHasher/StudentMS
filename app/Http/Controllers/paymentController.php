<?php

namespace App\Http\Controllers;
use App\Models\payment;
use App\Models\enrollment;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment = payment::get();
        return view('payments.paymentIndex')->with('payment',$payment);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('payments.addpayment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        payment::create($input);
        return redirect("/payments")->with('status','Your data is Successfully added.');


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
        $show_update_page = payment::find($id);
        return view('payments.updatePayment',compact('show_update_page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updatePayment = payment::find($id);
        $input = $request->all();
        $updatePayment->update($input);
        return redirect('/payments')->with('status','Your data is Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        payment::destroy($id);
        return redirect('/payments')->with('status','Your data is Completely Deleted.');

    }
}
