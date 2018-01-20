<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 9:20
 */

namespace designPatterns\creational\builder;


class Product
{
    private $parts = [];

    public function setPart($key, $value)
    {
        $this->parts[$key] = $value;
    }
}