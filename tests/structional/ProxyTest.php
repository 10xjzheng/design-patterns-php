<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 14:57
 */

namespace designPatterns\tests\structural;

use designPatterns\structural\flyweight\FlyweightFactory;
use designPatterns\structural\proxy\Proxy;
use designPatterns\structural\proxy\RealSubject;
use PHPUnit\Framework\TestCase;

/**
 * 代理模式测试类
 * PROXY（代理） — 对象结构型模式
 * 运用共享技术有效地支持大量细粒度的对象。
 * ```
 * Class ProxyTest
 * @package designPatterns\tests
 */
class ProxyTest extends TestCase
{
    public function testProxy()
    {
        $real = new RealSubject();
        $this->assertEquals('request', $real->request());
        $proxy = new Proxy($real);
        $this->assertEquals('proxy-request', $proxy->request());
    }
}