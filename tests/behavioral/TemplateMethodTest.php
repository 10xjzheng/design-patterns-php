<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 14:32
 */

namespace designPatterns\tests\behavioral;


use designPatterns\behavioral\templateMethod\ConcreteClass;
use PHPUnit\Framework\TestCase;

/**
 * 模板方法模式测试类
 * ```
 * TEMPLATE METHOD(模板方法) — 类行为型模式
 * STRATEGY(策略) — 对象行为型模式
 * 定义一个操作的算法的骨架，而将一些步骤延迟到子类中。TemplateMethod使得子类可以不改变一个算法的结构即可重定义该算法的某些特定步骤。
 * ```
 * Class TemplateMethodTest
 * @package designPatterns\tests\behavioral
 */
class TemplateMethodTest extends TestCase
{
    public function testTemplateMethod()
    {
        $object = new ConcreteClass();
        $this->assertEquals('Operation1-Operation2', $object->templateMethod());
    }
}