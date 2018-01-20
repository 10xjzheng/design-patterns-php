<?php
namespace designPatterns\tests\structural;
use designPatterns\structural\decorator\ConcreteComponent;
use designPatterns\structural\decorator\ConcreteDecorator;
use PHPUnit\Framework\TestCase;

/**
 * 装饰模式测试类
 * DECORATOR（装饰） — 对象结构型模式
 * 动态地给一个对象添加一些额外的职责。就增加功能来说，Decorator模式相比生成子类更加灵活。
 * ```
 * Class DecoratorTest
 * @package designPatterns\tests
 */
class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $concreteComponent = new ConcreteComponent();
        $this->assertEquals('ConcreteComponent', $concreteComponent->operation());
        $concreteComponent = new ConcreteDecorator($concreteComponent);
        $this->assertEquals('ConcreteComponent-ConcreteDecorator', $concreteComponent->operation());
    }
}