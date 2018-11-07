<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Profile;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('admin.includes.sidebar', function ($view) {

            // Get the $data
            $profile = Profile::all();

            if ($profile->count() > 0)
            {
                $profileMaxId = Profile::max('profile_id');
                $profile = Profile::findOrFail($profileMaxId);
                $view->with('profile', $profile);
            }
        });

        view()->composer('admin.includes.navbar', function ($view) {

            // Get the $data
            $profile = Profile::all();

            if ($profile->count() > 0)
            {
                $profileMaxId = Profile::max('profile_id');
                $profile = Profile::findOrFail($profileMaxId);
                $view->with('profile', $profile);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
