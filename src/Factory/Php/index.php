<?php

require __DIR__ . '/../../../vendor/autoload.php';

$banana = \DesignPattern\Factory\Php\FruitFactory::create('banana');
$apple = \DesignPattern\Factory\Php\FruitFactory::create('apple');

print_r($banana);
print_r($apple);