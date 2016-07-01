<?php
namespace Design\Notifier;

use Design\Notifier;

class TextNotifier extends Notifier
{
    public function inform($message)
    {
        echo 'TextNotifier::inform ' . $message . '<br>';
    }
}