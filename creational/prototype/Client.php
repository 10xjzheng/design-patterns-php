<?php
namespace designPatterns\creational\prototype;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 11:15
 */
class Client
{
    /**
     * php的__clone方法不能直接调用，用clone关键字代替
     * @param $prototype
     * @return mixed
     */
    public function operation(ProtoType $prototype)
    {
        return clone $prototype;
    }
}