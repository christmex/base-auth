<?php

namespace Christmex\BaseAuth;

use Illuminate\Support\ServiceProvider;


class BaseAuthServiceProvider extends ServiceProvider
{
    protected $commands = [
        'Christmex\BaseAuth\Commands\PublishCommand'
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->commands($this->commands);
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

        
        
        
    }
}
