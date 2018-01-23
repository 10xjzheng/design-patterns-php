<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 15:21
 */

namespace designPatterns\structural\adapter;



class Target implements InterfaceTarget
{
    public function request()
    {
        return 'Target Request';
    }
}