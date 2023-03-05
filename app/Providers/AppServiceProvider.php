<?php

namespace App\Providers;

use App\Settings\GeneralSettings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Head;
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

        Head::macro('htmlClass', function (array|string $class = null) {
            $this->htmlClasses = $this->htmlClasses ?? [];
            $classes = array_filter($this->htmlClasses + (is_array($class) ? $class : explode(' ', $class)));
            $this->htmlClasses = $classes;

            return implode(' ', $this->htmlClasses);
        });

        Head::macro('headerClass', function (array|string $class = null) {
            $this->headerClasses = $this->headerClasses ?? [];
            $classes = array_filter($this->headerClasses + (is_array($class) ? $class : explode(' ', $class)));
            $this->headerClasses = $classes;

            return implode(' ', $this->headerClasses);
        });

        Head::macro('bodyClass', function (array|string $class = null) {
            $this->bodyClasses = $this->bodyClasses ?? [];
            $classes = array_filter($this->bodyClasses + (is_array($class) ? $class : explode(' ', $class)));
            $this->bodyClasses = $classes;

            return implode(' ', $this->bodyClasses);
        });
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
