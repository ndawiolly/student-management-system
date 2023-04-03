<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\SubjectCombo;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function prepResult(){
        return view('ad_dash\result\add_result',[
            'classes'=> Classes::all(),
            'subjects'=>Subject::all(),

        ]);

    }
}
