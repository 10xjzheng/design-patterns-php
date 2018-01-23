<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 14:25
 */

namespace designPatterns\behavioral\templateMethod;


abstract class AbstractClass
{
    public final function templateMethod()
    {
        return $this->primitiveOperation1() . '-' . $this->primitiveOperation2();
    }

    public abstract function primitiveOperation1();

    public abstract function primitiveOperation2();
}