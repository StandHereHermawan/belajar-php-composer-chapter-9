<?php

namespace AriefMencobaTeknologi\Data;

class Customer
{
    public function __construct(private string $name)
    {
        # constructor
    }

    public function sayHello(?string $name = "Guest"): string
    {
        return "Hello $name! my name is $this->name";
    }
}
