<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

use App\View\Components\navhome;
use App\View\Components\navpost;
use App\View\Components\navportico;

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
        Blade::directive('routeIs', function ($expression) {
            return "<?php if(Request::url() == route($expression)): ?>";
        });

        Blade::component('navhome', navhome::class);
        Blade::component('navpost', navpost::class);
        Blade::component('navportico', navportico::class);

    }
}
