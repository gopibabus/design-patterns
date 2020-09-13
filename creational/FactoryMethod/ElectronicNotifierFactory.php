<?php
require_once('NotifierFactory.php');
require_once('SMS.php');
require_once('Email.php');

class ElectronicNotifierFactory implements NotifierFactory
{
    public static function getNotifier($notifier, $to)
    {

        if (empty($notifier)) {
            throw new Exception("No notifier passed.");
        }

        switch ($notifier) {
            case 'SMS':
                return new SMS($to);
                break;
            case 'Email':
                return new Email($to, 'Gopi');
                break;
            default:
                throw new Exception("Notifier invalid.");
                break;
        }
    }
}