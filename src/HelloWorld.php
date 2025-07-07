<?php

namespace fa21bsse1013\HelloWorld;

class HelloWorld
{
    public function say(string $name = 'World'): string
    {
        return "Hello, $name!";
    }
}
