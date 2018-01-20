<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 10:55
 */

namespace designPatterns\structural\decorator;


class ConcreteDecorator extends Decorator
{
    protected $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function operation()
    {
        $this->desc = $this->component->operation();
        $this->decorate();
        return $this->desc;
    }

    public function decorate()
    {
        $this->desc = $this->desc . '-ConcreteDecorator';
    }
}