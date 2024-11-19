<?php

class Seller
{
    public function __construct(private string $name)
    {

    }

    public function getName(): string{
        return $this->name;
    }

    public function sayHello(string $name = "Guest"):string
    {
        return "Hello {$name}, my name is {$this->name}";
    }
}