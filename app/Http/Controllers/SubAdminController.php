<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubAdminController extends Controller
{

    public function index(){
        return view('elearning.sub-admin');
    }

}
