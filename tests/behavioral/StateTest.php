<?php
namespace designPatterns\tests\behavioral;

use designPatterns\behavioral\state\ConcreteStateA;
use designPatterns\behavioral\state\ConcreteStateB;
use designPatterns\behavioral\state\Context;
use PHPUnit\Framework\TestCase;

/**
 * * 状态模式测试类
 * ```
 * STATE（状态） — 对象行为型模式
 * 允许一个其对象在其内部状态改变时改变它的行为，对象看起来似乎修改了它的类。
 * ```
 * Class StateTest
 * @package designPatterns\tests\behavioral
 */
class StateTest extends TestCase
{
    public function testState()
    {
        $context = new Context();
        $stateA = new ConcreteStateA();
        $context->setState($stateA);
        $this->assertEquals('HandleOfStateA', $context->request());
        $stateB = new ConcreteStateB();
        $context->setState($stateB);
        $this->assertEquals('HandleOfStateB', $context->request());
    }
}