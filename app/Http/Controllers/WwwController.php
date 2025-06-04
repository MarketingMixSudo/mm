<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WwwController extends Controller
{
     public function index(){
        return view ('pages.www.index');
    }
     public function websites(){
        return view ('pages.www.websites');
    }
     public function ecommerce(){
        return view ('pages.www.ecommerce');
    }
}
