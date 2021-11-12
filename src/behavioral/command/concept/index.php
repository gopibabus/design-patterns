<?php
/**
 * The client code can parameterize an invoker with any commands.
 */

use DesignPatterns\behavioral\command\concept\ComplexCommand;
use DesignPatterns\behavioral\command\concept\Invoker;
use DesignPatterns\behavioral\command\concept\Receiver;
use DesignPatterns\behavioral\command\concept\SimpleCommand;

$invoker = new Invoker();
$invoker->setOnStart(new SimpleCommand("Say Hi!"));
$receiver = new Receiver();
$invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

$invoker->doSomethingImportant();
