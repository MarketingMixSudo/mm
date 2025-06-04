<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
     public function index(){
        return view ('pages.projects.index');
    }
     public function logotypes(){
        return view ('pages.projects.logotypes');
    }
}
