<?php
namespace designPatterns\tests\behavioral;
use designPatterns\Behavioral\Command\ConcreteCommand;
use designPatterns\Behavioral\Command\Invoker;
use designPatterns\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

/**
 * 命令模式测试类
 * ```
 * COMMAND（命令） — 对象行为型模式
 * 将一个请求封装为一个对象，从而使你可用不同的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤消的操作。
 * ```
 * Class CommandTest
 * @package designPatterns\tests
 */
class CommandTest extends TestCase
{

    public function testCommand()
    {
        $Invoker = new Invoker();
        $receiver = new Receiver();
        $Invoker->setCommand(new ConcreteCommand($receiver));
        $this->assertEquals($receiver->action(), $Invoker->execute());
    }
}