<?php
namespace designPatterns\structural\adapter;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 15:05
 */
class Adaptee
{
    public function specialRequest()
    {
        return 'Adaptee Request';
    }
}