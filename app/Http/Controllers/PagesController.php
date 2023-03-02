<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function adminIndex(){
        return view('/ad_dash/admin_index');
    }

    public function classes(){
        return view ('/ad_dash/st_classes/create_class');
    }

    public function manageClass(){
        return view ('/ad_dash/st_classes/manage_class');
    }

    public function classEdit(){
        return view ('/ad_dash/st_classes/edit');
    }


    public function createStu(){
        return view('/ad_dash/subjects/create_subject');
    }

    public function manageStu(){
        return view('/ad_dash/subjects/manage_subject');
    }
}
