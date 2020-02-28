<?php

namespace App\Providers;

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
        if (preg_match("/^\/(public)|(public\/index.php)/",\Request::getBaseUrl()) ) {

            $newUrl = str_replace(\Request::getBaseUrl(), '', \Request::getUri());
            header('Location: '.$newUrl, true, 301);
            exit();

        }
    }
}
