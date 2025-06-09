<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $posts = Post::published()->select('id', 'title', 'slug', 'thumbnail', 'description',  'published_at')->orderBy('published_at', 'desc')->paginate(7);

        return view('pages.blog.index', compact('posts'));
    }


    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $posts = Post::published()->orderByDesc('published_at')->take(4)->get();

        $filteredPosts = $posts->filter(function ($p) use ($post) {
            return $p->id !== $post->id;
        });

        $latestPosts = $filteredPosts->take(3);

        return view('pages.blog.show', compact('post', 'latestPosts'));
    }
}
