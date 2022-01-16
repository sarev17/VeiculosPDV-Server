<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMidlleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($_SESSION['nivel'] == 'administrador'){
            return $next($request);
        }else{
            redirect(route('principal'));
        }

    }
}
