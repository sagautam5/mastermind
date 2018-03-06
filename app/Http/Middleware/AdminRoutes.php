<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;


class AdminRoutes
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
        if(Auth::user()->role()->first()->name=="Admin"){
            return $next($request);
        }
        return redirect()->back()->with('error','You don\'t have access to this page');
    }
}
