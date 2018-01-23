<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 17:34
 */

namespace designPatterns\creational\builder;


class ConcreteBuilder implements InterfaceBuilder
{
    /**
     * @var Product $product
     */
    private $product;

    public function buildBody()
    {
        $this->product = new Product();
    }

    public function buildPart1()
    {
        $this->product->setPart('Part1', new Part1());
    }

    public function buildPart2()
    {
        $this->product->setPart('Part2', new Part2());
    }

    public function getResult(): Product
    {
        return $this->product;
    }
}