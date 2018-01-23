<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 14:57
 */

namespace designPatterns\tests\structural;

use designPatterns\structural\flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase;

/**
 * 享元模式测试类
 * ```
 * FLYWEIGHT（享元） — 对象结构型模式
 * 运用共享技术有效地支持大量细粒度的对象。
 * ```
 * Class FacadeTest
 * @package designPatterns\tests
 */
class FlyweightTest extends TestCase
{
    public function testFlyweight()
    {
        $factory = new FlyweightFactory();
        $factory->getFlyweight('A');
        $factory->getFlyweight('B');
        $factory->getFlyweight('C');
        $factory->getFlyweight('B');
        $factory->getFlyweight('D');
        $this->assertEquals(4, $factory->getSize());
    }
}