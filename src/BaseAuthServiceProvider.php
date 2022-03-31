<?php

namespace Christmex\BaseAuth;

use Illuminate\Support\ServiceProvider;

use Christmex\BaseAuth\Console\Commands;

class BaseAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // include the routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        //include the views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'baseauth');

        
        // Register Command
        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishCommand::class,
            ]);
        }
        
        
    }
}
