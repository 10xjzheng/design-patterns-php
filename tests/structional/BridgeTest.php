<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 10:05
 */

namespace designPatterns\tests\structural;
use designPatterns\structural\bridge\ConcreteImplementorA;
use designPatterns\structural\bridge\ConcreteImplementorB;
use designPatterns\structural\bridge\RefinedAbstraction;
use PHPUnit\Framework\TestCase;

/**
 * 桥接模式测试类
 * BRIDGE（桥接） — 对象结构型模式
 * 将抽象部分与它的实现部分分离，使它们都可以独立的变化。
 * ```
 * Class BridgeTest
 * @package designPatterns\tests
 */
class BridgeTest extends TestCase
{
    public function testBridge()
    {
        $object = new RefinedAbstraction();
        $operationFirst = $object->operation(new ConcreteImplementorA());
        $operationSecond = $object->operation(new ConcreteImplementorB());
        $this->assertEquals([ConcreteImplementorA::class, ConcreteImplementorB::class], [$operationFirst, $operationSecond]);
    }
}