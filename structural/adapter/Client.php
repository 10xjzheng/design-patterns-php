<?php
namespace designPatterns\structural\adapter;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 15:05
 */
class Client
{
    /**
     * client只接受TargetInterface，但我们需要用到Adaptee的功能，于是我们用
     * Adapter实现TargetInterface并适配了Adaptee
     * @param InterfaceTarget $target
     * @return mixed
     */
    public function getResponse(InterfaceTarget $target)
    {
        return $target->request();
    }
}