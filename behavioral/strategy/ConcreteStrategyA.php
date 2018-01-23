<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 13:47
 */

namespace designPatterns\behavioral\strategy;


class ConcreteStrategyA implements InterfaceStrategy
{
    public function algorithm($a, $b)
    {
        return $a + $b;
    }
}