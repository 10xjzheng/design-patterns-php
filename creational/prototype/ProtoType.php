<?php
namespace designPatterns\creational\prototype;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 11:48
 */
abstract class ProtoType
{
    public $key;
    public abstract function __clone();
}