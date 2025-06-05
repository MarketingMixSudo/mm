<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyFormsController extends Controller
{
       public function index(){
        return view ('pages.company-forms.index');
    }
}
