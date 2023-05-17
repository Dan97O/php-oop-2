<?php
class Desktop extends Computer
{
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
