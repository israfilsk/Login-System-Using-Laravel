<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CustomAuth
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
        
        $path=$request->path();
        if(($path=='login' || $path=='signup') && Session::get('user')){
            return redirect('home');
        }
        return $next($request);
    }
}
