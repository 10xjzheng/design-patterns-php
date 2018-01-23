<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 15:02
 */

namespace designPatterns\behavioral\visitor;


class ConcreteElementB implements InterfaceElement
{
    public function accept(InterfaceVisitor $visitor)
    {
        return $visitor->visitConcreteElementB($this);
    }
}