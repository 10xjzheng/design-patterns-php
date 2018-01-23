<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 13:48
 */

namespace designPatterns\behavioral\strategy;


class Context
{
    /**
     * @var InterfaceStrategy
     */
    private $strategy;

    public function setStrategy(InterfaceStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * 执行算法
     * @param int $a
     * @param int $b
     * @return mixed
     */
    public function executeStrategy($a, $b)
    {
        return $this->strategy->algorithm($a, $b);
    }
}