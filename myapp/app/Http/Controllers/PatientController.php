<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    //

    public  function add(Request $req){
    // Validation here
    $validated = $req->validate([
        'patient_id' => 'required',
        'name' => 'required|string|max:255',
        'age' => 'required|integer|min:0|max:120',
        'disease' => 'required|string',
        'admission_date' => 'required|date'
    ]);

    // Insert after validation
    DB::table('patients')->insert($validated);

    return "Patient Added Successfully";

    }
}
