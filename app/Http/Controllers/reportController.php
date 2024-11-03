<?php
namespace App\Http\Controllers;
use illuminate\Http\Request;
use App\Models\payment;
use App\Models\enrollment;
use App\Models\batche;
use App\Models\student;
use App;
use Auth;





class reportController extends Controller
{

    public function report(string $id) {

        $payment = Enrollment::find($id);
        $pdf = App::make('dompdf.wrapper');
        
        $print = '';
        
        $print .= "<div style='margin:20px; padding:20px;'>";
        $print .= "<h1>Payment Receipt</h1>";
        $print .= "<hr>";
        $print .= "<p>Receipt No: <b>{$id}</b></p>";
        $print .= "<p>Student Name : <b>" . $payment->student->name . "</b></p>"; // Assuming `student_name` is correct
        $print .= "<p>Enroll No: <b>{$payment->enroll_no}</b></p>";
        $print .= "<p>Batch ID: <b>" . $payment->batche_id . "</b></p>";  // Corrected structure
        $print .= "<p>Date: <b>{$payment->join_date}</b></p>";
        $print .= "<hr>";
        // Start Table
        $print .= "<table style='width:100%; border-collapse: collapse;'>";
        $print .= "<thead><tr>";
        $print .= "<th style='text-align: left;'>Batch</th>";
        $print .= "<th style='text-align: left;'>Amount</th>";
        $print .= "</tr></thead>";
        $print .= "<tbody>";
        
        $print .= "<tr>";

        $print .= "<td style='margin-top:40px;'><b>" . $payment->batche_id . "</b></td>"; // Batch ID in table
        $print .= "<td><b>{$payment->fee}</b></td>";  // Amount in table
        $print .= "</tr>";
        
        $print .= "</tbody>";
        $print .= "</table>";

        $print .='<p style="margin-top:50px;">===========================<span style="color:red;padding:0px 10px;font-size:22px;">Print Form</span>============================</p>';
        $print .= "</div>";
        
        $pdf->loadHTML($print);
        return $pdf->stream();
    }
    



}