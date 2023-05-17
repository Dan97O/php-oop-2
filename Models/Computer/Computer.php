<?php
class Computer
{

    public function __construct(protected string $brand, protected int $price)
    {
        $this->brand = $brand;
        $this->price = $price;
    }

    public function get_brand()
    {
        return $this->brand;
    }

    public function get_price()
    {
        return $this->price;
    }
}
