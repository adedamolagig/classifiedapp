<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Http\Request;

class RepairPort80
{
    public function handle($request, Closure $next)
    {
           /* if (!$request->secure() && env('APP_ENV') === 'prod') {
                return redirect()->secure($request->getRequestUri());
            }**/
            Request::setTrustedProxies([$request->getClientIp()]);
            if (!$request->isSecure()) {
                return redirect()->secure($request->getRequestUri());
            }

            return $next($request); 
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   /* public function handle($request, Closure $next)
    {
        return $next($request);
    }*/
}

