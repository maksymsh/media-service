<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;

class AppMiddleware
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
        Splade::setRootView('app.root');

        return $next($request);
    }
}
