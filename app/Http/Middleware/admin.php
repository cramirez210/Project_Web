<?php

namespace App\Http\Middleware;

use Closure;

class admin
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
        $actual_user=\Auth::user();

        if($actual_user->rol!=1){
            dd('¡No tiene permisos para ver esta vista!');
        }
        return $next($request);
    }
}