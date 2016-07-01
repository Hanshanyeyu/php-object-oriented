<?php

//过程化的编程，耦合度高

// 当新添加一种文件类型时，就要同时改变两个方法逻辑

function readParams($sourceFile) {

    $params = [];

    if(preg_match('/xml/', $sourceFile)) {

        //读取XML文件内容，并存储在 $params 数组中

    } else {

        //读取JSON文件内容，并存储在 $params 数组中

    }
}

function writeParams($params, $sourceFile) {

    if(preg_match('/xml/', $sourceFile)) {

        //把 $params 写在 XML 文件中

    } else {

        //把 $params 写到 JSON 文件中

    }

}