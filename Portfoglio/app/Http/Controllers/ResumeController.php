<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{


    public function __construct()
    {
 
    }

    public function resume(){
        return view('resume');
    }
}
