<?php
namespace designPatterns\creational\abstractFactory;

/**
 * 负责2系列产品的创建
 * Class ConcreteFactory2
 * @package designPatterns\abstractFactory
 */
class ConcreteFactory2 extends AbstractFactory
{
    /**
     * 返回A2产品
     * @return ProductA2
     */
    public function createProductA() {
        return new ProductA2();
    }

    /**
     * 返回B2产品
     * @return ProductB2
     */
    public function createProductB() {
        return new ProductB2();
    }
}