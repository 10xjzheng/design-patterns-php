<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/20
 * Time: 16:06
 */

namespace designPatterns\structural\proxy;


class Proxy implements InterfaceSubject
{
    protected $subject;

    public function __construct(InterfaceSubject $subject)
    {
        $this->subject = $subject;
    }

    public function request()
    {
        return 'proxy-' . $this->subject->request();
    }
}