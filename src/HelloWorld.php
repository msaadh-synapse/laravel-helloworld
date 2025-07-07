<?php

namespace YourName\HelloWorld;

class HelloWorld
{
    public function say(string $name = 'World'): string
    {
        return "Hello, $name!";
    }
}
