<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 14:32
 */

namespace designPatterns\tests\behavioral;


use designPatterns\behavioral\templateMethod\ConcreteClass;
use designPatterns\behavioral\visitor\ConcreteElementA;
use designPatterns\behavioral\visitor\ConcreteElementB;
use designPatterns\behavioral\visitor\ConcreteVisitor1;
use designPatterns\behavioral\visitor\ConcreteVisitor2;
use designPatterns\behavioral\visitor\ObjectStructure;
use PHPUnit\Framework\TestCase;

/**
 * 访问者模式测试类
 * ```
 * TVISITOR（访问者） — 对象行为型模式
 * 表示一个作用于某对象结构中的各元素操作。它使你可以在不改变各元素的类的前提下定义作用于这些元素的新操作。
 * ```
 * Class VisitorTest
 * @package designPatterns\tests\behavioral
 */
class VisitorTest extends TestCase
{
    public function testVisitor()
    {
        $elementA = new ConcreteElementA();
        $elementB = new ConcreteElementB();

        $structure = new ObjectStructure();
        $structure->addElement($elementA);
        $structure->addElement($elementB);

        $visitor1 = new ConcreteVisitor1();
        $structure->visitAll($visitor1);
        $this->assertEquals(['visitor-1-A', 'visitor-1-B'], $structure->getResult());

        $visitor2 = new ConcreteVisitor2();
        $structure->visitAll($visitor2);
        $this->assertEquals(['visitor-2-A', 'visitor-2-B'], $structure->getResult());

    }
}