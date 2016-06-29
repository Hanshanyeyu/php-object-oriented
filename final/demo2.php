<?php
class Checkout
{
    final public function check()
    {

    }
}

//final 方法不能够重写
class IllegalCheckout extends Checkout
{
    public function check()
    {

    }
}

var_dump(new IllegalCheckout());