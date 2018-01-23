<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 16:10
 */

namespace designPatterns\behavioral\mediator;


abstract class Colleague
{
    protected $num;

    public function getNum()
    {
        return $this->num;
    }

    public abstract function action();
}