<?php
namespace Design;

use Design\Lesson;

class RegistrationMsg
{
    public function register(Lesson $lesson)
    {
        //在这里处理注册逻辑

        //在这里发送消息通知用户
        $notifier = Notifier::getInstance();
        $notifier->inform('Lesson register successfully! cost:' . $lesson->cost());
    }
}

