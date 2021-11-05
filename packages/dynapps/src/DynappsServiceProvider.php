<?php
namespace Adylcodes\Dynapps;

use Illuminate\Support\ServiceProvider;

class DynappsServiceProvider extends ServiceProvider
{
    public function register()
    {
        // load package migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function boot()
    {
        //
    }
}
