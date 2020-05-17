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
        $lang = 'es';
        switch (strtolower(request()->getPreferredLanguage())) {
            case 'ru_ru':
            case 'ru':
                $lang = 'ru';
                break;
            case 'en_us':
            case 'en_gb':
            case 'en':
                $lang = 'en';
                break;
        }
        $this->app->setLocale($lang);
    }
}
