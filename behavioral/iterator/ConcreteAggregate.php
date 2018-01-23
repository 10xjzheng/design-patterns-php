<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 15:04
 */

namespace designPatterns\behavioral\iterator;


class ConcreteAggregate implements InterfaceAggregate
{
    private $list;

    private $index = 0;

    private $size;

    public function createIterator()
    {
        return new ConcreteIterator($this);
    }

    public function get($index)
    {
        return $this->list[$index];
    }

    public function add($data)
    {
        $this->list[$this->index] = $data;
        $this->size ++;
        $this->index ++;
    }

    public function getSize()
    {
        return $this->size;
    }
}