<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 15:01
 */

namespace designPatterns\behavioral\iterator;


Interface InterfaceAggregate
{
    public function createIterator();

    public function get($index);

    public function getSize();

    public function add($data);
}