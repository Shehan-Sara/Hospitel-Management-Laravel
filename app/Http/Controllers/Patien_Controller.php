<?php

namespace App\Http\Controllers;

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

    public function patientprofile()
    {
        return view('Patient.patientprofile');
    }
}