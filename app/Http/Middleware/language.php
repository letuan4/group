<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class language
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
        $language = Session::get('language');
        Session::put('language', config('app.locale'));
        Lang::setLocale($language);

        return $next($request);
    }
}
