<?php
function sum($a, $b)
{
    echo $a + $b;
}

call_user_func('sum', 1, 2);
//输出：3

//该函数能把 数组扁平化再传给 sum 方法
call_user_func_array('sum', [1, 2]);
//输出：3