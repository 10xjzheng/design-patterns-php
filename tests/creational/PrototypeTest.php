<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 10:05
 */

namespace designPatterns\tests\creational;
use designPatterns\creational\prototype\Client;
use designPatterns\creational\prototype\ConcreteProtoType1;
use designPatterns\creational\prototype\ConcreteProtoType2;
use PHPUnit\Framework\TestCase;

/**
 * 原型模式测试类
 * ```
 * PROTOTYPE（原型） — 对象创建型模式
 * 用原型实例指定创建对象的种类，并且通过拷贝这些原型创建新的对象。
 * ```
 * Class FactoryMethodTest
 * @package designPatterns\tests
 */
class PrototypeTest extends TestCase
{
    public function testPrototype()
    {
        $client = new Client();

        $concretePrototype1 = new ConcreteProtoType1();
        $concretePrototype1->key = 'ConcreteProtoType1';
        //克隆ConcreteProtoType1
        $clone1 = $client->operation($concretePrototype1);
        $this->assertEquals('ConcreteProtoType1', $clone1->key);

        $concretePrototype2 = new ConcreteProtoType2();
        $concretePrototype2->key = 'ConcreteProtoType2';
        //克隆ConcreteProtoType2
        $clone2 = $client->operation($concretePrototype2);
        $this->assertEquals('ConcreteProtoType2', $clone2->key);
    }

}