<?php
require_once __DIR__ . '/../Traits/Keyboard.php';
class Desktop extends Computer
{
    use Keyboard;
    public function __construct($brand, $price, public string $psu)
    {
        parent::__construct($brand, $price);
        $this->psu = $psu;
    }
    public function getPsu()
    {
        return 'Cooler MasterXXX';
    }
    public function getProductType()
    {
        return 'Desktop';
    }
}
