<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 14:58
 */

namespace designPatterns\behavioral\visitor;


Interface InterfaceElement
{
    public function accept(InterfaceVisitor $visitor);
}