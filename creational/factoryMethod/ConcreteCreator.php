<?php
namespace designPatterns\creational\factoryMethod;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 10:39
 */
class ConcreteCreator extends Creator
{
    public function factoryMethod()
    {
        return new ConcreteProduct();
    }
}