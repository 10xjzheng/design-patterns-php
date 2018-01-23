<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 15:00
 */

namespace designPatterns\behavioral\visitor;


class ConcreteElementA implements InterfaceElement
{
    public function accept(InterfaceVisitor $visitor)
    {
        return $visitor->visitConcreteElementA($this);
    }
}