<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 16:57
 */

namespace designPatterns\structural\bridge;


class RefinedAbstraction extends Abstraction
{
    public function operation(InterfaceImplementor $imp)
    {
        return $imp->operationImp();
    }

}