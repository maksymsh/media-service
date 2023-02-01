<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // if ($this->app->environment('local')) {
        //     $superadmin = User::query()->where('username', 'superadmin')->first();

        //     if ($superadmin) {
        //         Auth::login($superadmin);
        //     }
        // }
    }
}
