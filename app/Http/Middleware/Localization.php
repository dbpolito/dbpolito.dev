<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\Support\Str;
use Illuminate\View\View;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->segment(1) === 'br') {
            app()->setLocale('br');
        }

        ViewFacade::composer('*', function (View $view) use ($request) {
            $locale = app()->getLocale();
            $otherLocale = app()->getLocale() !== 'en' ? 'en' : 'br';
            $routeName = Str::after(Route::currentRouteName(), '.');

            app()->setLocale($otherLocale);
            $parameters = collect($request->route()->parameters())
                ->map(function ($value, $key) {
                    return $value instanceof Model
                        ? $value->{$key}
                        : $value;
                })
                ->toArray();
            app()->setLocale($locale);

            $menu = collect([
                (object) ['route' => 'posts', 'name' => (object) ['en' => 'Posts', 'br' => 'Artigos']],
                // (object) ['route' => 'uses', 'name' => (object) ['en' => 'Uses', 'br' => 'Usa']],
                (object) ['route' => 'about', 'name' => (object) ['en' => 'About', 'br' => 'Sobre']],
                (object) ['route' => 'contact', 'name' => (object) ['en' => 'Contact', 'br' => 'Contato']],
            ])->map(function ($item) use ($locale) {
                return (object) [
                    'route' => $item->route,
                    'name' => $item->name->{$locale},
                ];
            })  ;


            $view->with([
                'menu' => $menu,
                'locale' => $locale,
                'currentUrlForOtherLocale' => route(
                    "{$otherLocale}.{$routeName}",
                    $parameters
                ),
            ]);
        });

        return $next($request);
    }
}
