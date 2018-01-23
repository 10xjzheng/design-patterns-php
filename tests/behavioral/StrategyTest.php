<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 13:52
 */

namespace designPatterns\tests\behavioral;
use designPatterns\behavioral\strategy\ConcreteStrategyA;
use designPatterns\behavioral\strategy\ConcreteStrategyB;
use designPatterns\behavioral\strategy\Context;
use PHPUnit\Framework\TestCase;

/**
 * 策略模式测试类
 * ```
 * STRATEGY(策略) — 对象行为型模式
 * 定义一系列的算法，把它们一个个封装起来，并且使它们可相互替换。本模式使得算法可独立于使用它的客户而变化。
 * ```
 * Class StrategyTest
 * @package designPatterns\tests\behavioral
 */
class StrategyTest extends TestCase
{
    public function testStrategy()
    {
        $context = new Context();
        $strategyA = new ConcreteStrategyA();
        $context->setStrategy($strategyA);
        $this->assertEquals(15, $context->executeStrategy(5, 10));
        $strategyB = new ConcreteStrategyB();
        $context->setStrategy($strategyB);
        $this->assertEquals(50, $context->executeStrategy(5, 10));
    }
}