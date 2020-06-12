<?php

namespace App\Http\Middleware;

use Closure;

class LangMiddleware
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
        if( $request->segment(1) != in_array($request->segment(1), config('app.languages')) ){
            abort(404);
        } elseif( !empty($request->segment(1)) && $request->segment(1) == in_array($request->segment(1), config('app.languages')) ){
            \App::setLocale($request->segment(1));
        } else {
            \App::setLocale($request->getPreferredLanguage(config('app.languages')));
        }

        return $next($request);
    }
}
