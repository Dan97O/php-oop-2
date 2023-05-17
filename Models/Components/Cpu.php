<?php
class CpuDesktop extends Desktop
{
    public function __construct($brand, $price, $psu, public string $name)
    {
        parent::__construct($brand, $price, $psu);
        $this->name = $name;
    }
}

class CpuLaptop extends Laptop
{
    public function __construct($brand, $price, $battery, public string $name)
    {
        parent::__construct($brand, $price, $battery);
        $this->name = $name;
    }
}
