<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 18:00
 */

namespace designPatterns\tests\behavioral;

use designPatterns\behavioral\mediator\ColleagueA;
use designPatterns\behavioral\mediator\ColleagueB;
use designPatterns\behavioral\mediator\ConcreteMediator;
use PHPUnit\Framework\TestCase;

/**
 * 中介者模式测试类
 * ```
 * MEDIATOR(中介者)—对象行为型模式
 * 用一个中介对象来封装一系列的对象交互。中介者使各对象不需要显式地相互引用，从而使其耦合松散，而且可以独立地改变它们之间的交互。
 * ```
 * Class MediatorTest
 * @package designPatterns\tests\behavioral
 */
class MediatorTest extends TestCase
{

    public function testMediator()
    {
        $collA = new ColleagueA();
        $collB = new ColleagueB();
        $mediator = new ConcreteMediator($collA, $collB);
        $this->assertEquals('HaveARest', $mediator->notice($collA, 'Weekends'));
        $this->assertEquals('HardWorking', $mediator->notice($collB, 'BossIsComing'));
    }
}