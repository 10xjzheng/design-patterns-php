<?php
namespace designPatterns\tests\behavioral;
use designPatterns\Behavioral\Command\ConcreteCommand;
use designPatterns\Behavioral\Command\Invoker;
use designPatterns\Behavioral\Command\Receiver;
use designPatterns\Behavioral\interpreter\Context;
use designPatterns\Behavioral\interpreter\NonterminalExpression;
use designPatterns\Behavioral\interpreter\TerminalExpression;
use PHPUnit\Framework\TestCase;

/**
 * 解释器模式测试类
 * ```
 * INTERPRETER(解释器)—类行为型模式
 * 给定一个语言，定义它的文法的一种表示，并定义一个解释器，这个解释器使用该表示来解释语言中的句子。
 * ```
 * Class Interpreter
 * @package designPatterns\tests
 */
class InterpreterTest extends TestCase
{

    public function testInterpreter()
    {
        $contextList[] = new Context('a');
        $contextList[] = new Context('b');
        $terExpression = new TerminalExpression();
        $nonTerExpression = new NonterminalExpression();
        $result = [];
        //里面常常是递归，这里没实现，只是简单的分类处理
        foreach ($contextList as $context) {
            switch ($context->type) {
                case 'a': $result[] = $terExpression->interpreter($context);
                        break;
                case 'b': $result[] = $nonTerExpression->interpreter($context);
                    break;
                default:break;
            }
        }
        $this->assertEquals(['Terminal', 'Nonterminal'], $result);
    }
}