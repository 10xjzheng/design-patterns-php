<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 9:54
 */

namespace designPatterns\structural\composite;


class Leaf extends Component
{

    public function __construct()
    {
        $this->unitValue = 1;
    }

    public function getClassName()
    {
        return self::class;
    }
}