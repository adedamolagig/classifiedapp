<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class HandleAdmin
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
        // dd(Auth::user()->is_admin);
        if(Auth::user()){
            if(Auth::user()->is_admin){
                return $next($request);
            }
            else{
                return redirect(route('login'));
            }
        }
        else{
            return redirect(route('login'));
        }
        
    }
}
