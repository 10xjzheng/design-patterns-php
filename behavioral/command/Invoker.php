<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 17:43
 */

namespace designPatterns\Behavioral\Command;


class Invoker implements CommandInterface
{
    private $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function execute()
    {
        return $this->command->execute();
    }
}