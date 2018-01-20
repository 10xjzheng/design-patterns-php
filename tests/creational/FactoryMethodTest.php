<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 10:05
 */

namespace designPatterns\tests\creational;
use designPatterns\creational\factoryMethod\ConcreteCreator;
use designPatterns\creational\factoryMethod\ConcreteProduct;
use PHPUnit\Framework\TestCase;

/**
 * 工厂方法测试类
 * ```
 * FACTORY METHOD（工厂方法） — 对象创建型模式
 * 定义一个用于创建对象的接口，让子类决定实例化哪一个类。Factory Method使一个类的实例化延迟到其子类。
 * ```
 * Class FactoryMethodTest
 * @package designPatterns\tests
 */
class FactoryMethodTest extends TestCase
{
    public function testFactoryMethod()
    {
        $director = new ConcreteCreator();
        $product = $director->factoryMethod();
        $this->assertInstanceOf(ConcreteProduct::class, $product);
    }
}