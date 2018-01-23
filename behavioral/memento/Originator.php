<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 18:31
 */

namespace designPatterns\behavioral\memento;


class Originator
{
    private $state;

    public function createMemento()
    {
        return new Memento($this->state);
    }

    public function setMemento($state)
    {
        $this->state = $state;
    }

    /**
     * 从备忘录恢复
     * @param Memento $memento
     */
    public function restoreMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }

    public function getState()
    {
        return $this->state;
    }
}