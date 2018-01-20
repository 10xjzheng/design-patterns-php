<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 10:55
 */

namespace designPatterns\structural\decorator;


abstract class Decorator extends Component
{
    abstract function decorate();
}