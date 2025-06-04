<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WwwController extends Controller
{
     public function index(){
        return view ('pages.www.index');
    }
}
