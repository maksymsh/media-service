<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\Good;
use App\Models\Product;
use App\Models\Service;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
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
        $categoriesQuery = Category::query()->whereNull('parent_id')
            ->where('published', true);

        $serviceCategories = (clone $categoriesQuery)->where('type', Service::class)->get();
        $productCategories = (clone $categoriesQuery)->where('type', Product::class)->get();
        $goodCategories = (clone $categoriesQuery)->where('type', Good::class)->get();

        View::share('serviceCategories', $serviceCategories);
        View::share('productCategories', $productCategories);
        View::share('goodCategories', $goodCategories);

        Splade::share('user', $request->user());
        Splade::share('feedback', ['type' => '', 'id' => '']);
        Splade::setRootView('app.root');

        return $next($request);
    }
}
