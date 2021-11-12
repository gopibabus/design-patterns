<?php
/**
 * The client code.
 */

use DesignPatterns\behavioral\mediator\concept\Component1;
use DesignPatterns\behavioral\mediator\concept\Component2;
use DesignPatterns\behavioral\mediator\concept\ConcreteMediator;

$c1 = new Component1();
$c2 = new Component2();
$mediator = new ConcreteMediator($c1, $c2);

echo "Client triggers operation A.\n";
$c1->doA();

echo "\n";
echo "Client triggers operation D.\n";
$c2->doD();
