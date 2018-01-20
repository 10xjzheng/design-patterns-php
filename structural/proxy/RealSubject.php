<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 16:05
 */

namespace designPatterns\structural\proxy;


class RealSubject implements SubjectInterface
{
    public function request()
    {
        return 'request';
    }
}