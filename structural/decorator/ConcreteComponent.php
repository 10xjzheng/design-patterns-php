<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 11:31
 */

namespace designPatterns\structural\decorator;


class ConcreteComponent extends Component
{
    public function operation()
    {
        return $this->desc = 'ConcreteComponent';
    }
}