<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 11:37
 */

namespace designPatterns\Behavioral\chainOfResponsibility;


class ConcreteHandle1 extends Handler
{
    public function __construct($successor)
    {
        $this->successor = $successor;
    }

    public function handleRequest($request)
    {
        $request .= '-handle1';
        if(!$this->processing($request))  {
            return false;
        }
        if($this->successor !== NUll) {
            return $this->successor->handleRequest($request);
        }
        return $request;
    }

    public function processing($request)
    {
        return true;
    }
}