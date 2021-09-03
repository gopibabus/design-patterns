<?php

namespace DesignPatterns\creational\factoryMethod\concept;

/**
 * The Product interface declares the operations that all concrete products must
 * implement.
 */
interface Product
{
    public function operation(): string;
}
