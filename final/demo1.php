<?php
final class Checkout
{

}

//final 类不能够继承，因为是最终类
class IllegalCheckout extends Checkout
{

}

var_dump(new IllegalCheckout());