<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 14:04
 */

namespace designPatterns\tests\structural;
use designPatterns\structural\facade\CompilerFacade;
use PHPUnit\Framework\TestCase;
/**
 * 外观模式测试类
 * FACADE（外观） — 对象结构型模式
 * 为子系统中的一组接口提供一个一致的界面，Facade模式定义了一个高层接口，这个接口使得这一子系统更加容易使用。
 * ```
 * Class FacadeTest
 * @package designPatterns\tests
 */
class FacadeTest extends TestCase
{
    public function testFacade()
    {
        $facade = new CompilerFacade();
        $output = $facade->compile('C language');
        $this->assertEquals('BinaryCodes', $output);
    }
}