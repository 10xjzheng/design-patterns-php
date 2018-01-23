<?php
namespace designPatterns\tests\behavioral;
use designPatterns\Behavioral\chainOfResponsibility\ConcreteHandle1;
use designPatterns\Behavioral\chainOfResponsibility\ConcreteHandle2;
use PHPUnit\Framework\TestCase;

/**
 * 职责链模式测试类
 * ```
 * CHAIN OF RESPONSIBILITY(职责链) — 对象行为型模式
 * 使多个对象都有机会处理请求，从而避免请求的发送者和接受者之间的耦合关系。将这些对象连成一条链，并沿着这条链传递该请求，直到有一个对象处理它为止。
 * ```
 * Class ChainOfResponsibilityTest
 * @package designPatterns\tests
 */
class ChainOfResponsibilityTest extends TestCase
{

    public function testChainOfResponsibilityTest()
    {
        $request = 'request';
        $handle = new ConcreteHandle1(new ConcreteHandle2(null));
        $result = $handle->handleRequest($request);
        $this->assertEquals('request-handle1-handle2', $result);
    }
}