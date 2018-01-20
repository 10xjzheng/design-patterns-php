<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 10:15
 */

namespace designPatterns\structural\composite;


class Tree extends Component
{
    public function __construct()
    {
        $this->unitValue = 5;
    }
    public function getClassName()
    {
        return self::class;
    }
}