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

$routes = function ($locale) {
    return function () use ($locale) {
        $menu = collect(config('menu.main'));

        // Route::get($menu->first(fn ($item) => $item->route === 'uses')->slug->{$locale}, fn () => view('uses')->name('uses');
        Route::get($menu->first(fn ($item) => $item->route === 'about')->slug->{$locale}, fn () => view('about'))->name('about');
        Route::get($menu->first(fn ($item) => $item->route === 'contact')->slug->{$locale}, fn () => view('contact'))->name('contact');
        Route::get('/', 'PostsController@index')->name('posts');
        Route::get('/{slug}', 'PostsController@show')->name('posts.show');
    };
};

Route::name('br.')->middleware('localization')->prefix('br')->group($routes('br'));
Route::name('en.')->middleware('localization')->group($routes('en'));




