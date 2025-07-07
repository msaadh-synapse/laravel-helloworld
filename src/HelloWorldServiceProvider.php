<?php

namespace YourName\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('helloworld', function () {
            return new HelloWorld();
        });
    }

    public function boot()
    {
        // You can load routes, views, configs here later
    }
}
