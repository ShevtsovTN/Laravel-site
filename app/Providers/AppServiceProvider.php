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
        switch (strtolower(request()->getPreferredLanguage())) {
            case 'ru_ru':
            case 'ru':
                $this->app->setLocale('ru');
                break;
            case 'en_us':
            case 'en_gb':
            case 'en':
                $this->app->setLocale('en');
                break;
            default:
                $this->app->setLocale('es');
                break;
        }
    }
}
