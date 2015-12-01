<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GoogleAdsServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('AdWordsUser', function() {
            return new \AdWordsUser(base_path('config/googleAuth.ini'));
        });
    }
}
