<?php

namespace fa21bsse1013\HelloWorld\Facades;

use Illuminate\Support\Facades\Facade;

class HelloWorld extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'helloworld';
    }
}
