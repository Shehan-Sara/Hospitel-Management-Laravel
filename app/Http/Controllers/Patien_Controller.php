<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class Patien_Controller extends Controller
{
    public function patientDB()
    {
        return view('Patient.Pdashboard');
    }

    public function makeappoiment()
    {
        return view('Patient.makeappoiment');
    }

    public function patientprofile(Request $request)
    {
        $id = intval($request->input('id'));
        $num = $id;

        $patient = Patient::where('user_id', $num)->firstOrFail();

        return view('Patient.patientprofile', compact('patient'));

    }
}