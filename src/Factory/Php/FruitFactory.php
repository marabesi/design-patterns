<?php

namespace DesignPattern\Factory\Php;

class FruitFactory {

    /**
     * @param string $fruit
     * @return \DesignPattern\Factory\Php\Fruit
     */
    public static function create($fruit)
    {
        $class = sprintf(
            '%s\%s', __NAMESPACE__, ucfirst($fruit)
        );

        return new $class;
    }
}