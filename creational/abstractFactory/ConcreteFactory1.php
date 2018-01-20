<?php
namespace designPatterns\creational\abstractFactory;

/**
 * 负责1系列产品的创建
 * Class ConcreteFactory1
 * @package designPatterns\abstractFactory
 */
class ConcreteFactory1 extends AbstractFactory
{
    /**
     * 返回A1产品
     * @return ProductA1
     */
    public function createProductA() {
        return new ProductA1();
    }

    /**
     * 返回B1产品
     * @return ProductB1
     */
    public function createProductB() {
        return new ProductB1();
    }
}