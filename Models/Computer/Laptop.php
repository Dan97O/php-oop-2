<?php
require_once __DIR__ . '/../Traits/Keyboard.php';

class Laptop extends Computer
{
    use Keyboard;
    public function __construct($brand, $price, public string $battery, private string $url = "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/refurb-macbook-air-silver-m1-202010?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1634145618000")
    {
        parent::__construct($brand, $price);
        $this->battery = $battery;
        $this->url = $url;

    }
    public function getTypeBattery()
    {
        return $this->battery;
    }
    public function getProductType()
    {
        return 'Laptop';
    }
    public function getUrl()
    {
        return $this->url;
    }
}
