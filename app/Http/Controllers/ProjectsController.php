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

     public function businessCards(){
        return view ('pages.projects.business-cards');
    }

     public function letterhead(){
        return view ('pages.projects.letterhead');
    }
     public function posters(){
        return view ('pages.projects.posters');
    }
}
