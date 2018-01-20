<?php
namespace designPatterns\creational\singleton;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 12:42
 */
class Singleton
{
    public static $singleton;

    private function __construct() {}

    static function getInstance()
    {
        if(self::$singleton === null) {
            self::$singleton = new self();
        }
        return self::$singleton;
    }

    private function __clone() {}
    private function __wakeup() {}
}