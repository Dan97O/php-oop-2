<?php
require_once __DIR__ . '/../Traits/Keyboard.php';

class Laptop extends Computer
{
    use Keyboard;
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
