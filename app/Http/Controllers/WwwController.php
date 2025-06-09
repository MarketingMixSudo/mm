<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use App\Models\RealisationCategory;
use Illuminate\Http\Request;

class WwwController extends Controller
{
    public function index()
    {
        return view('pages.www.index');
    }
    public function websites()
    {
        return view('pages.www.websites');
    }
    public function ecommerce()
    {
        return view('pages.www.ecommerce');
    }
    public function realisations()
    {

        $categories = RealisationCategory::get();
        $realisations = Realisation::with('realisationCategories')->orderBy('sort', 'asc')->get();



        return view('pages.www.realisations', compact('realisations','categories'));
    }
}
