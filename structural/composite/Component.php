<?php
namespace designPatterns\structural\composite;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 9:45
 */
abstract class Component
{
    protected $unitValue;

    public $children = [];

    public abstract function getClassName();

    public function add(Component $component)
    {
        $this->children[] = $component;
    }

    public function remove(Component $component)
    {
        foreach ($this->children as $key => $child) {
            if($child === $component) {
                unset($this->children[$key]);
            }
        }
    }

    public function operation()
    {
        $sum = $this->unitValue;
        foreach ($this->children as $child) {
            $sum += $child->operation();
        }
        return $sum;
    }
}