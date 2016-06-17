<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\UserAgent;

class UserAgentServiceProvider extends ServiceProvider {

    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('App\Helpers\Contracts\UserAgentContract', function() {

            return new UserAgent();
        });
    }

    /**
     * Get the services provided by the provider. ONLY requires if defer is set to true
     *
     * @return array
     */
    public function provides() {
        return ['App\Helpers\Contracts\RocketShipContract'];
    }

}
