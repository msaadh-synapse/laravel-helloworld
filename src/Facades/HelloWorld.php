<?php

namespace YourName\HelloWorld\Facades;

use Illuminate\Support\Facades\Facade;

class HelloWorld extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'helloworld';
    }
}
