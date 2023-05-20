<?php
require_once __DIR__ . '/../Traits/Keyboard.php';
class Desktop extends Computer
{
    use Keyboard;
    public function __construct($brand, $price, private string $psu, private string $url = "https://messoanuovo.it/wp-content/uploads/2021/12/PC-gaming-scaled.jpg")
    {
        parent::__construct($brand, $price);
        $this->psu = $psu;
        $this->url = $url;
    }
    public function getPsu()
    {
        return $this->psu;
    }
    public function getProductType()
    {
        return 'Desktop';
    }

    public function getUrl()
    {
        return $this->url;
    }
}
