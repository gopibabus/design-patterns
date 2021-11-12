<?php

namespace DesignPatterns\behavioral\command\concept;

/**
 * The Command interface declares a method for executing a command.
 */
interface Command
{
    public function execute(): void;
}
