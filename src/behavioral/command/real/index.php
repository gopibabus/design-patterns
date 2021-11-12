<?php
/**
 * The client code.
 */

use DesignPatterns\behavioral\command\real\IMDBGenresScrapingCommand;
use DesignPatterns\behavioral\command\real\Queue;

$queue = Queue::get();

if ($queue->isEmpty()) {
    $queue->add(new IMDBGenresScrapingCommand());
}

$queue->work();
