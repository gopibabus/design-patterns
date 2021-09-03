<?php

namespace DesignPatterns\creational\factoryMethod\concept;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
