<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 10:51
 */

namespace designPatterns\structural\decorator;


abstract class Component
{
    protected $desc;

    public abstract function operation();
}