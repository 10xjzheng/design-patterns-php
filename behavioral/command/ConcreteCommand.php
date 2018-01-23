<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 17:38
 */

namespace designPatterns\Behavioral\Command;


class ConcreteCommand implements InterfaceCommand
{
    private $console;

    public function __construct(Receiver $console)
    {
        $this->console = $console;
    }

    public function execute()
    {
        return $this->console->action();
    }
}