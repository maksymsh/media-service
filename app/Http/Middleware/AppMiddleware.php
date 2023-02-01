<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\SpladeTable;

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
        Paginator::useBootstrapFive();
        SpladeTable::defaultPerPageOptions([10, 50, 100]);
        SpladeTable::defaultColumnCanBeHidden();
        SpladeTable::defaultGlobalSearch();
        SpladeTable::defaultHighlightFirstColumn();
        SpladeTable::defaultSearchDebounce(500);
        Splade::defaultToast(function ($toast) {
            $toast->rightBottom()->autoDismiss(5);
        });
        Splade::setRootView('app.root');

        return $next($request);
    }
}
