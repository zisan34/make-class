<?php

namespace Zisan34\Providers;

use Illuminate\Support\ServiceProvider;

class MakeClassServiceProvider extends ServiceProvider
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
        //
        $this->app->singleton('command.zisan34.make-class', function($app){
            return $app['Zisan34\\Commands\\MakeClassCommand'];
        });
        $this->commands('command.zisan34.make-class');
    }
}
