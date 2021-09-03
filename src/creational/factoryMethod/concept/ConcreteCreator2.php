<?php

namespace DesignPatterns\creational\factoryMethod\concept;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}
