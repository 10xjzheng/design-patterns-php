<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 14:59
 */

namespace designPatterns\behavioral\visitor;


class ConcreteVisitor2 implements InterfaceVisitor
{
    public function visitConcreteElementA(ConcreteElementA $element)
    {
        return 'visitor-2-A';
    }

    public function visitConcreteElementB(ConcreteElementB $element)
    {
        return 'visitor-2-B';
    }
}