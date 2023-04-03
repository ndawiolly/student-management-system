<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function firstPage(){
        return view('student_dash\wait');
    }
}
