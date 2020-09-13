<?php

interface NotifierFactory
{
    public static function getNotifier($notifier, $to);
}