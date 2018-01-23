<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 11:56
 */

namespace designPatterns\behavioral\state;


class Context
{
    /**
     * @var InterfaceState $state
     */
    protected $state;

    public function request()
    {
        return $this->state->handle();
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}