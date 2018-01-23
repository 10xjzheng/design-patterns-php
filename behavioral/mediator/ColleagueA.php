<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 16:19
 */

namespace designPatterns\behavioral\mediator;


class ColleagueA extends Colleague
{
    public function action()
    {
        return 'HaveARest';
    }
}