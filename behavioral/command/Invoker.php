<?php
namespace designPatterns\Behavioral\Command;


class Invoker implements InterfaceCommand
{
    private $command;

    public function setCommand(InterfaceCommand $command)
    {
        $this->command = $command;
    }

    public function execute()
    {
        return $this->command->execute();
    }
}