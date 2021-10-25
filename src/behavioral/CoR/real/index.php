<?php

/**
 * The client code.
 */
use DesignPatterns\behavioral\CoR\real\RoleCheckMiddleware;
use DesignPatterns\behavioral\CoR\real\Server;
use DesignPatterns\behavioral\CoR\real\ThrottlingMiddleware;
use DesignPatterns\behavioral\CoR\real\UserExistsMiddleware;

$server = new Server();
$server->register("admin@example.com", "admin_pass");
$server->register("user@example.com", "user_pass");

// All middleware are chained. The client can build various configurations of
// chains depending on its needs.
$middleware = new ThrottlingMiddleware(2);
$middleware
    ->linkWith(new UserExistsMiddleware($server))
    ->linkWith(new RoleCheckMiddleware());

// The server gets a chain from the client code.
$server->setMiddleware($middleware);

// ...

do {
    echo "\nEnter your email:\n";
    $email = readline();
    echo "Enter your password:\n";
    $password = readline();
    $success = $server->logIn($email, $password);
} while (!$success);
