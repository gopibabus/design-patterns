<?php
/**
 * The client code.
 */

use DesignPatterns\behavioral\state\concept\ConcreteStateA;
use DesignPatterns\behavioral\state\concept\Context;

$context = new Context(new ConcreteStateA());
$context->request1();
$context->request2();
