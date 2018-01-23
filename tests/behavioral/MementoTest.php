<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 9:28
 */

namespace designPatterns\tests\behavioral;


use designPatterns\behavioral\memento\Caretaker;
use designPatterns\behavioral\memento\Originator;
use PHPUnit\Framework\TestCase;

/**
 * 备忘录模式测试类
 * ```
 * MEMENTO（备忘录）—对象行为型模式
 * 在不破坏封装性的前提下，捕获了一个对象的内部状态，并在该对象之外保存这个状态。这样以后就可以将该对象恢复到原先保存的状态。
 * ```
 * Class MementoTest
 * @package designPatterns\tests\behavioral
 */
class MementoTest extends TestCase
{
    public function testMemento()
    {
        $originator = new Originator();
        $caretaker = new Caretaker();
        $originator->setMemento('OPEN');
        //报存到备忘录
        $caretaker->store('switch', $originator->createMemento());
        $originator->setMemento('OFF');
        $this->assertEquals('OFF', $originator->getState());
        //从备忘录恢复
        $originator->restoreMemento($caretaker->get('switch'));
        $this->assertEquals('OPEN', $originator->getState());
    }
}