<?php
namespace designPatterns\Behavioral\interpreter;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 14:05
 */
abstract class AbstractExpression
{
    public abstract function interpreter(Context $context);
}