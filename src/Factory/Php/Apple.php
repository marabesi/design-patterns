<?php

namespace DesignPattern\Factory\Php;

class Apple implements Fruit
{

    /**
     * @return string
     */
    public function getColor()
    {
        return 'Red';
    }
}