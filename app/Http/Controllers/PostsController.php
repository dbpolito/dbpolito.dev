<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest('published_at')->get();

        return view('posts')->with('posts', $posts);
    }

    public function show(Request $request, string $slug)
    {
        $locale = app()->getLocale();
        $post = Post::where("slug->{$locale}", $slug)->firstOrFail();

        $request->route()->setParameter('slug', $post);

        return view('post')->with('post', $post);
    }
}
