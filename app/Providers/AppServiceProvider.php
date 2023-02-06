<?php

namespace App\Providers;

use App\Settings\GeneralSettings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\SpladeTable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GeneralSettings::class);
        $this->app->bind('settings', GeneralSettings::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrapFive();
        SpladeTable::defaultPerPageOptions([10, 50, 100]);
        SpladeTable::defaultColumnCanBeHidden();
        SpladeTable::defaultGlobalSearch();
        SpladeTable::defaultHighlightFirstColumn();
        SpladeTable::defaultSearchDebounce(500);
        Splade::defaultToast(function ($toast) {
            $toast->rightBottom()->autoDismiss(5);
        });
    }
}
