<?php
/**
 * The client code.
 */

use DesignPatterns\behavioral\mediator\real\Logger;
use DesignPatterns\behavioral\mediator\real\OnboardingNotification;
use DesignPatterns\behavioral\mediator\real\UserRepository;

$repository = new UserRepository();
events()->attach($repository, "facebook:update");

$logger = new Logger(__DIR__ . "/log.txt");
events()->attach($logger, "*");

$onboarding = new OnboardingNotification("1@example.com");
events()->attach($onboarding, "users:created");

// ...

$repository->initialize(__DIR__ . "users.csv");

// ...

$user = $repository->createUser([
    "name" => "John Smith",
    "email" => "john99@example.com",
]);

// ...

$user->delete();
