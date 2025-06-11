<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class AboutController extends Controller
{
       public function index(){

            $logos = Partner::orderBy('sort', 'asc')->get();

        return view ('pages.about.index',compact('logos'));
    }
}
