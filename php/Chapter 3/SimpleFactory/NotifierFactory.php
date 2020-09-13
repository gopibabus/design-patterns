<?php

class NotifierFactory
{
    const EMAIL_FROM = 'gopi';

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
                return new Email($to, self::EMAIL_FROM);
                break;
            default:
                throw new Exception("Notifier invalid.");
                break;
        }
    }
}