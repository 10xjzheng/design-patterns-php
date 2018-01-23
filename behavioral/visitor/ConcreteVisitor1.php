<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 14:59
 */

namespace designPatterns\behavioral\visitor;


class ConcreteVisitor1 implements InterfaceVisitor
{
    public function visitConcreteElementA(ConcreteElementA $element)
    {
        return 'visitor-1-A';
    }

    public function visitConcreteElementB(ConcreteElementB $element)
    {
        return 'visitor-1-B';
    }
}