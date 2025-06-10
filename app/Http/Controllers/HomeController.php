<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Post;
use App\Models\Realisation;
use App\Models\Testimonial;
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

        $realisations = $realisations->unique('id');

        $testimonials = Testimonial::orderBy('sort', 'asc')->get();

        $posts = Post::published()->orderByDesc('published_at')->take(8)->get();

         $logos = Partner::orderBy('sort', 'asc')->get();

        return view('pages.home.index', compact('categories', 'realisations','testimonials','posts','logos'));
    }
}
