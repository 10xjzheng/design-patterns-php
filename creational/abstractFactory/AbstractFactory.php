<?php
namespace designPatterns\creational\abstractFactory;

/**
 * 抽象工厂:提供一个创建一系列相关或相互依赖对象的接口，而无需指定它们具体的类
 * Class AbstractFactory
 * @package designPatterns\creational\abstractFactory
 */
abstract class AbstractFactory
{
    public abstract function createProductA();
    public abstract function createProductB();
}