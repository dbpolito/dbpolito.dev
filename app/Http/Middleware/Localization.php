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

            $menu = collect(config('menu.main'))->map(function ($item) use ($locale, $routeName) {
                return (object) [
                    'route' => $item->route,
                    'name' => $item->name->{$locale},
                    'is_active' => $item->route === $routeName,
                ];
            });

            $view->with([
                'menu' => $menu,
                'locale' => $locale,
                'currentUrlForOtherLocale' => route(
                    "{$otherLocale}.{$routeName}",
                    $parameters
                ),
                'activeMenuName' => optional($menu->first(fn ($item) => $item->is_active))->name,
            ]);
        });

        return $next($request);
    }
}
