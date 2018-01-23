<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 10:05
 */

namespace designPatterns\tests\creational;
use designPatterns\creational\abstractFactory\ConcreteFactory1;
use designPatterns\creational\abstractFactory\ConcreteFactory2;
use designPatterns\creational\abstractFactory\ProductA1;
use designPatterns\creational\abstractFactory\ProductA2;
use designPatterns\creational\abstractFactory\ProductB1;
use designPatterns\creational\abstractFactory\ProductB2;
use PHPUnit\Framework\TestCase;

/**
 * 抽象工厂测试类
 * ```
 * FACTORY METHOD（工厂方法） — 对象创建型模式
 * 提供一个创建一系列相关或相互依赖对象的接口，而无需指定它们具体的类
 * ```
 * Class AbstractFactoryTest
 * @package designPatterns\tests
 */
class AbstractFactoryTest extends TestCase
{
    /**
     * 测试工厂1的产品系列
     */
    public function testFactory1()
    {
        $factory1 = new ConcreteFactory1();
        $this->assertEquals(new ProductA1(), $factory1->createProductA());
        $this->assertEquals(new ProductB1(), $factory1->createProductB());
    }

    /**
     * 测试工厂2的产品系列
     */
    public function testFactory2()
    {
        $factory2 = new ConcreteFactory2();
        $this->assertEquals(new ProductA2(), $factory2->createProductA());
        $this->assertEquals(new ProductB2(), $factory2->createProductB());
    }
}