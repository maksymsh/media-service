<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use ProtoneMedia\Splade\Facades\Splade;

class AppMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $filter = [
            'maxPrice' => (int) 0,
            'minPrice' => (int) 0,
            'attributeValues' => [],
            'form' => [
                'price_from' => (int) $request->get('price_from', 0),
                'price_to' => (int) $request->get('price_to', 0),
                'sort' => $request->get('sort', 'default'),
                'attrs' => [],
            ],
        ];

        Splade::share('filter', $filter);
        Splade::share('user', $request->user());
        Splade::share('feedback', ['type' => '', 'id' => '']);
        Splade::setRootView('app.root');

        return $next($request);
    }
}
