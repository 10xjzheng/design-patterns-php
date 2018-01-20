<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 14:52
 */

namespace designPatterns\structural\flyweight;


class FlyweightFactory
{
    public $map = [];

    public function getFlyweight($key)
    {
        if(array_key_exists($key, $this->map)) {
            return $this->map[$key];
        }
        return $this->map[$key] = new ConcreteFlyweight($key);
    }

    public function getSize()
    {
        return count($this->map);
    }
}