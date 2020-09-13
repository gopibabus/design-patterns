<?php
declare(strict_types=1);

require_once('NotifierFactory.php');

$mobile = NotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification();

echo "\n";

$email = NotifierFactory::getNotifier("Email", "test@example.com");
echo $email->sendNotification();