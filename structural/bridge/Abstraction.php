<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 16:57
 */

namespace designPatterns\structural\bridge;


abstract class Abstraction
{
    public abstract function operation(ImplementorInterface $imp);
}