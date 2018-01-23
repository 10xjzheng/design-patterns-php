<?php
namespace designPatterns\behavioral\mediator;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 16:09
 */
abstract class Mediator
{
    public abstract function notice(Colleague $colleague, $message);
}