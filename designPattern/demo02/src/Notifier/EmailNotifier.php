<?php
namespace Design\Notifier;

use Design\Notifier;

class EmailNotifier extends Notifier
{
    public function inform($message)
    {
        echo 'EmailNotifier::inform ' . $message , '<br>';
    }
}