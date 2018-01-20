<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 10:05
 */

namespace designPatterns\tests\structural;
use designPatterns\structural\adapter\Adaptee;
use designPatterns\structural\adapter\Adapter;
use designPatterns\structural\adapter\Client;
use designPatterns\structural\adapter\Target;
use PHPUnit\Framework\TestCase;

/**
 * 适配器模式测试类
 * ADAPTER（适配器） — 类对象结构型模式
 * 将一个类的接口转换成客户希望的另外一个接口。Adapter模式使得原本由于接口不兼容而不能一起工作的那些类可以一起工作。
 * ```
 * Class AdapterTest
 * @package designPatterns\tests
 */
class AdapterTest extends TestCase
{

    public function testWithoutAdapter()
    {
        $this->assertTrue(true);
        $target = new Target();
        $client = new Client();
        return $client->getResponse($target);
    }

    public function testWithAdapter()
    {
        $this->assertTrue(true);
        $target = new Adapter(new Adaptee());
        $client = new Client();
        return $client->getResponse($target);
    }

    /**
     * @depends testWithoutAdapter
     * @depends testWithAdapter
     */
    public function testAdapter()
    {
        $this->assertEquals(
            ['Target Request', 'Adaptee Request'],
            func_get_args()
        );
    }
}