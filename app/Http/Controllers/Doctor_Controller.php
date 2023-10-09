<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Doctor_Controller extends Controller
{
    public function doctorDB()
    {
        return view('Doctor.Ddashboard');
    }

    public function Dhome()
    {
        return view('Doctor.Dhome');
    }
}