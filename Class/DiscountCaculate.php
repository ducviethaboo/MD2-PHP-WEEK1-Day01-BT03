<?php


class DiscountCaculate
{
    public $price;
    public $discount;

    public function __construct($a, $b)
    {

        $this->price = $a;
        $this->discount = $b;
    }

    function getDiscountAmount()
    {
        return $this->discount;
    }

    function getDiscount()
    {
        return ($this->price * ($this->getDiscountAmount() / 100));
    }

    function getDiscountPrice()
    {
        return ($this->price - ($this->getDiscount()));
    }
}
