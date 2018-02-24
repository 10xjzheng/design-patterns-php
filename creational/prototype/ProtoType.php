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
    private $key;
    public abstract function __clone();

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        return $this->key = $key;
    }
}