<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EndUser_Controller extends Controller
{
    public function patientDB()
    {
        return view('Patient.Pdashboard');
    }
}