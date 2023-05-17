<?php
class CpuDesktop extends Computer
{
    public function __construct(public string $name)
    {
        $this->name = $name;
    }

    public function getBrand()
    {
        return $this->name;
    }
}

class CpuLaptop extends Computer
{
    public function __construct(public string $name)
    {

        $this->name = $name;
    }

    public function getBrand()
    {
        return $this->name;
    }
}
