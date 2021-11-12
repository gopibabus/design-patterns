<?php

/**
 * The client code.
 */

use DesignPatterns\behavioral\iterator\real\CsvIterator;

$csv = new CsvIterator(__DIR__ . '/cats.csv');

foreach ($csv as $key => $row) {
    print_r($row);
}
