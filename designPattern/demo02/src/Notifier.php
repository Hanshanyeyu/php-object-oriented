<?php
namespace Design;

use Design\Notifier\EmailNotifier;
use Design\Notifier\TextNotifier;

abstract class Notifier
{
    public static function getInstance()
    {
        if (rand(1, 2) > 1) {
            return new EmailNotifier();
        }

        return new TextNotifier();
    }

    abstract function inform($message);
}