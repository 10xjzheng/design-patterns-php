<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 14:45
 */

namespace designPatterns\behavioral\visitor;


Interface InterfaceVisitor
{
    public function visitConcreteElementA(ConcreteElementA $element);

    public function visitConcreteElementB(ConcreteElementB $element);
}