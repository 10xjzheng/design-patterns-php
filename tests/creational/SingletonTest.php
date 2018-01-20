<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 10:05
 */

namespace designPatterns\tests\creational;
use designPatterns\creational\singleton\Singleton;
use PHPUnit\Framework\TestCase;

/**
 * 单例模式测试类
 * ```
 * SINGLETON（单例） — 对象创建型模式
 * 保证一个类仅有一个实例，并提供一个访问它的全局访问点
 * ```
 * Class SingletonTest
 * @package designPatterns\tests
 */
class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();
        $this->assertSame($first, $second);
    }

}