<?php
class Product
{
    private $discount;

    public function setDiscount($discount)
    {
        echo $discount;
    }
}

call_user_func([new Product(), 'setDiscount'], 2.9);
//2.9

call_user_func_array([new Product(), 'setDiscount'], [2.9]);
//2.9