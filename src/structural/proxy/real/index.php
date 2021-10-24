<?php

use DesignPatterns\structural\proxy\real\CachingDownloader;
use DesignPatterns\structural\proxy\real\Downloader;
use DesignPatterns\structural\proxy\real\SimpleDownloader;

/**
 * The client code may issue several similar download requests. In this case,
 * the caching proxy saves time and traffic by serving results from cache.
 *
 * The client is unaware that it works with a proxy because it works with
 * downloaders via the abstract interface.
 */
function clientCode(Downloader $subject)
{
    // ...

    $result = $subject->download("http://example.com/");

    // Duplicate download requests could be cached for a speed gain.

    $result = $subject->download("http://example.com/");

    // ...
}

echo "Executing client code with real subject:\n";
$realSubject = new SimpleDownloader();
clientCode($realSubject);

echo "\n";

echo "Executing the same client code with a proxy:\n";
$proxy = new CachingDownloader($realSubject);
clientCode($proxy);
