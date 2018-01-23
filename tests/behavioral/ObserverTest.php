<?php
namespace designPatterns\tests\behavioral;

use designPatterns\behavioral\observer\ConcreteObserver;
use designPatterns\behavioral\observer\ConcreteSubject;
use PHPUnit\Framework\TestCase;

/**
 * * 观察者模式测试类
 * ```
 * OBSERVER（观察者） —对象行为型模式
 * 定义对象间的一种一对多的依赖关系，当一个对象的状态发生改变时，所有依赖于它的对象都得到通知并被自动更新。
 * ```
 * Class ObserverTest
 * @package designPatterns\tests\behavioral
 */
class ObserverTest extends TestCase
{
    public function testObserver()
    {
        $subject = new ConcreteSubject();
        $observer = new ConcreteObserver($subject);
        $subject->attach($observer);
        $subject->setState('SetHomework');
        $this->assertEquals('SetHomework-DoHomework', $observer->getResponse());
    }
}