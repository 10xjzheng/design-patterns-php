<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 14:09
 */

namespace designPatterns\Behavioral\interpreter;


class Context
{
    public $type;

    public function __construct($type)
    {
        $this->type = $type;
    }
}