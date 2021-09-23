<?php
/**
 * Now, in other parts of the app, the client code can accept factory objects of
 * any type.
 */

use DesignPatterns\creational\abstractFactory\real\Page;
use DesignPatterns\creational\abstractFactory\real\PHPTemplateFactory;

$page = new Page('Sample page', 'This it the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());


// Uncomment the following if you have Twig installed.

// echo "Testing rendering with the Twig factory:\n"; echo $page->render(new
// TwigTemplateFactory());
