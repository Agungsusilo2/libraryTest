<?php

class Seller
{
    public function __construct(private string $name)
    {

    }

    public function getName(): string{
        return $this->name;
    }

    public function sayHello()
    {
        echo "Hello {$this->name}".PHP_EOL;
    }
}