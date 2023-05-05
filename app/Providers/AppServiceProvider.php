<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\View;
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
        view()->composer('*', function ($view) {

            $socials = SocialMedia::get();
            $general = GeneralSetting::first();

            $view->with('socials',$socials);
            $view->with('general',$general);

        });



    }
}
