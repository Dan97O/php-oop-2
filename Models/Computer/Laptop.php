<?php
class Laptop extends Computer
{
    public function __construct($brand, $price, public string $battery)
    {
        parent::__construct($brand, $price);
        $this->battery = $battery;
    }
}
