<?php

namespace DesignPatterns\creational\abstractFactory\real;

/**
 * This is another Abstract Product type, which describes whole page templates.
 */
interface PageTemplate
{
    public function getTemplateString(): string;
}
