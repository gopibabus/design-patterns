<?php
/**
 * The client code.
 */

use DesignPatterns\behavioral\observer\concept\ConcreteObserverA;
use DesignPatterns\behavioral\observer\concept\ConcreteObserverB;
use DesignPatterns\behavioral\observer\concept\Subject;

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();
