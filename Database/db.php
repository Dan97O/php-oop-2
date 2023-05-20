<?php
require_once __DIR__ . '/../Models/Computer/Computer.php';
require_once __DIR__ . '/../Models/Computer/Desktop.php';
require_once __DIR__ . '/../Models/Computer/Laptop.php';
require_once __DIR__ . '/../Models/Components/Cpu.php';

$computers = [
    new Computer('computer', 1500),
    new Desktop('Asus', 1800, 'Cooler MasterXXX'),
    new Laptop('Macbook', 2000, 'Batteria ai polimeri di litio'),
];
