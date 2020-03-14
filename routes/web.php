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

$routes = function () {
    Route::get('/', function () {
        $posts = Post::latest()->get();

        return view('posts')->with('posts', $posts);
    })->name('posts');

    Route::get('/posts/{slug}', function ($slug) {
        $locale = app()->getLocale();
        $post = Post::where("slug->{$locale}", $slug)->firstOrFail();

        request()->route()->setParameter('slug', $post);

        return view('post')
        ->with('post', $post);
    })->name('posts.show');

    // Route::get('/uses', function () { return view('home'); })->name('uses');
    Route::get('/about', function () { return view('about'); })->name('about');
    Route::get('/contact', function () { return view('contact'); })->name('contact');
};

Route::name('en.')->middleware('localization')->group($routes);
Route::name('br.')->middleware('localization')->prefix('br')->group($routes);




