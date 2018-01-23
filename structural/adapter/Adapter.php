<?php
namespace designPatterns\structural\adapter;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 15:05
 */
class Adapter implements InterfaceTarget
{
    public $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        return $this->adaptee->specialRequest();
    }
}