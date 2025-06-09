<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Models\RealisationCategory;

class HomeController extends Controller
{
    public function index()
{
    $categories = RealisationCategory::all();
    $realisations = collect();

    foreach ($categories as $category) {
        $categoryRealisations = $category->realisations()
            ->with('realisationCategories')
            ->orderBy('sort', 'asc')
            ->limit(6)
            ->get();

        $realisations = $realisations->merge($categoryRealisations);
    }

    // Unikalne realizacje, jeśli jakaś realizacja należy do kilku kategorii
    $realisations = $realisations->unique('id');

    return view('pages.home.index', compact('categories', 'realisations'));
}
}
