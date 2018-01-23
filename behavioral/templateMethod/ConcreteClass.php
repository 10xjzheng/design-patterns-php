<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 14:29
 */

namespace designPatterns\behavioral\templateMethod;


class ConcreteClass extends AbstractClass
{
    public function primitiveOperation1()
    {
        return 'Operation1';
    }

    public function primitiveOperation2()
    {
        return 'Operation2';
    }
}