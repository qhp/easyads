<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use FacebookAds\Api;

class FacebookAdsServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('FacebookAdsAPI', function() {

            $config = config('facebook');

            Api::init($config['app_id'], $config['app_secret'], $config['access_token']);

            return Api::instance();
        });
    }
}
