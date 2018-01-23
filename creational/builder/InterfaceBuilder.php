<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 17:31
 */

namespace designPatterns\creational\builder;


Interface InterfaceBuilder
{
    public function buildBody();
    public function buildPart1();
    public function buildPart2();
    public function getResult();
}