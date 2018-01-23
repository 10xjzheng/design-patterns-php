<?php
namespace designPatterns\tests\behavioral;
use designPatterns\Behavioral\Command\ConcreteCommand;
use designPatterns\Behavioral\Command\Invoker;
use designPatterns\Behavioral\Command\Receiver;
use designPatterns\Behavioral\interpreter\Context;
use designPatterns\Behavioral\interpreter\NonterminalExpression;
use designPatterns\Behavioral\interpreter\TerminalExpression;
use designPatterns\behavioral\iterator\ConcreteAggregate;
use PHPUnit\Framework\TestCase;

/**
 * 迭代器模式测试类
 * ```
 * ITERATOR(迭代器) — 对象行为型模式
 * 提供一种方法顺序访问一个聚合对象中的各个元素，而又不需暴露该对象的内部表示。
 * ```
 * Class Interpreter
 * @package designPatterns\tests
 */
class IteratorTest extends TestCase
{

    public function testIterator()
    {
        $aggregate = new ConcreteAggregate();
        $aggregate->add('a');
        $aggregate->add('b');
        $aggregate->add('c');
        $aggregate->add('d');
        $iterator = $aggregate->createIterator();
        $this->assertEquals('a', $iterator->first());

        $this->assertEquals('a', $iterator->next());
        $this->assertEquals('b', $iterator->next());
        $this->assertEquals('b', $iterator->currentItem());
        $this->assertEquals('c', $iterator->next());
        $this->assertEquals('d', $iterator->next());
        $this->assertEquals(true, $iterator->isDone());
    }
}