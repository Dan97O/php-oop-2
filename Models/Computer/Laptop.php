<?php
class Laptop extends Computer
{
    public function __construct($brand, $price, public string $battery)
    {
        parent::__construct($brand, $price);
        $this->battery = $battery;
    }
    public function getTypeBattery()
    {
        return 'Batteria ai polimeri di litio ';
    }
    public function getProductType()
    {
        return 'Laptop';
    }
}
