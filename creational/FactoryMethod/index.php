<?php
declare(strict_types=1);

require_once('ElectronicNotifierFactory.php');
require_once('CourierNotifierFactory.php');

$mobile = ElectronicNotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification();

echo "\n";

$email = ElectronicNotifierFactory::getNotifier("Email", "test@example.com");
echo $email->sendNotification();

echo "\n";

$post = CourierNotifierFactory::getNotifier("Post", "10 Downing Street, SW1A 2AA");
echo $post->sendNotification();