<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 10:05
 */

namespace designPatterns\tests\creational;
use designPatterns\creational\builder\ConcreteBuilder;
use designPatterns\creational\builder\Director;
use designPatterns\creational\builder\Product;
use PHPUnit\Framework\TestCase;

/**
 * 生成器测试类
 * ```
 * BUILDER（生成器）——对象创建型模式
 * 将一个复杂对象的构建与它的表示分离，使得同样的构建过程可以创建不同的表示。
 * ```
 * Class BuilderTest
 * @package designPatterns\tests
 */
class BuilderTest extends TestCase
{
    public function testDirector()
    {
        $director = new Director();
        $product = $director->buildProduct(new ConcreteBuilder());
        $this->assertInstanceOf(Product::class, $product);
    }
}