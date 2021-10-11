<?php

namespace DesignPatterns\structural\decorator\concept;

/**
 * The base Component interface defines operations that can be altered by
 * decorators.
 */
interface Component
{
    public function operation(): string;
}
