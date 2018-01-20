<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 14:49
 */

namespace designPatterns\structural\flyweight;


class ConcreteFlyweight extends Flyweight
{
    public $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function operation()
    {
        return $this->key;
    }
}