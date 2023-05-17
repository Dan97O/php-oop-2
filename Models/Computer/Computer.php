<?php
class Computer
{

    public function __construct(protected string $brand, protected int $price)
    {
        $this->brand = $brand;
        $this->price = $price;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function getProductType()
    {
        return 'Generic Computer';
    }
}
