<?php
namespace designPatterns\tests\structural;
use designPatterns\structural\composite\Forest;
use designPatterns\structural\composite\Leaf;
use designPatterns\structural\composite\Tree;
use PHPUnit\Framework\TestCase;

/**
 * 组合模式测试类
 * COMPOSITE（组合） — 对象结构型模式
 * 将对象组合成树形结构以表示“部分-整体”的层次结构。Composite使得用户对单个对象和组合对象的使用具有一致性。
 * ```
 * Class CompositeTest
 * @package designPatterns\tests
 */
class CompositeTest extends TestCase
{
    public function testComposite()
    {
        $leaf = new Leaf();
        $tree = new Tree();
        $tree->add($leaf);
        $this->assertEquals(6, $tree->operation());

        $forest = new Forest();
        $forest->add($leaf);
        $forest->add($tree);
        $this->assertEquals(17, $forest->operation());
    }
}