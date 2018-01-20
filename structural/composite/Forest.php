<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 9:57
 */

namespace designPatterns\structural\composite;


class Forest extends Component
{
    public function __construct()
    {
        $this->unitValue = 10;
    }

    public function getClassName()
    {
        return self::class;
    }
}