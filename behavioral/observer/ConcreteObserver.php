<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 10:37
 */

namespace designPatterns\behavioral\observer;


class ConcreteObserver implements InterfaceObserver
{
    private $subject;

    private $response;

    public function __construct(InterfaceSubject $subject)
    {
        $this->subject = $subject;
    }

    public function update()
    {
        $this->response = $this->subject->getState() . '-DoHomework';
    }

    public function getResponse()
    {
        return $this->response;
    }
}