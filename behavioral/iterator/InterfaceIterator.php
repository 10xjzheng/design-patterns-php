<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 15:06
 */

namespace designPatterns\behavioral\iterator;


Interface InterfaceIterator
{
    public function first();

    public function next();

    public function isDone();

    public function currentItem();
}