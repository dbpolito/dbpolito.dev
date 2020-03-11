<?php

use App\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('home'); })->name('home');
// Route::get('/uses', function () { return view('home'); })->name('uses');
// Route::get('/about', function () { return view('home'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');

Route::get('/posts', function () {
    $posts = Post::latest()->get();

    return view('posts')->with('posts', $posts);
})->name('posts');

Route::get('/posts/{slug}', function ($slug) {
    $post = Post::where('slug->en', $slug)->firstOrFail();

    return view('post')->with('post', $post);
})->name('posts.show');


