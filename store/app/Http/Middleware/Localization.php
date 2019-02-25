<?php

namespace App\Http\Middleware;
use Carbon\Carbon;

use Closure;

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
         // Check header request and determine localizaton
       // $local = ($request->hasHeader('X-localization')) ? $request->header('X-localization') : 'ar';
        $local = ($request->lang) ? $request->lang : 'ar';
        // set laravel localization
        app()->setLocale($local);
        // continue request
        return $next($request);
        
        /*
        if ( \Session::has('locale')) {
            \App::setLocale(\Session::get('locale'));
 
            // You also can set the Carbon locale
            Carbon::setLocale(\Session::get('locale'));
        }*/
 
        return $next($request);
    }
}
