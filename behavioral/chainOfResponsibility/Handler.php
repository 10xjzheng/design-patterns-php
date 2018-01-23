<?php
namespace designPatterns\Behavioral\chainOfResponsibility;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 11:20
 */
abstract class Handler
{
    protected $successor;

    public abstract function handleRequest($request);

}