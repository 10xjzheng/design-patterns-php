<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 15:10
 */

namespace designPatterns\behavioral\iterator;


class ConcreteIterator implements InterfaceIterator
{
    private $aggregate;

    private $index;

    public function __construct(ConcreteAggregate $aggregate)
    {
        $this->aggregate = $aggregate;
        $this->index = 0;
    }

    public function first()
    {
        return $this->aggregate->get(0);
    }

    public function next()
    {
        $next = $this->aggregate->get($this->index);
        $this->index ++;
        return $next;
    }

    public function isDone()
    {
       return $this->index >= $this->aggregate->getSize();
    }

    public function currentItem()
    {
        return $this->aggregate->get($this->index-1);
    }
}