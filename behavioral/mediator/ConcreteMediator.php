<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 17:50
 */

namespace designPatterns\behavioral\mediator;


use PHPUnit\Runner\Exception;

class ConcreteMediator extends Mediator
{
    /**
     * @var Colleague
     */
    public $coll1;

    /**
     * @var Colleague
     */
    public $coll2;

    public function __construct(Colleague $coll1, Colleague $coll2)
    {
        $this->coll1 = $coll1;
        $this->coll2 = $coll2;
    }

    /**
     * 通知
     * @param Colleague $colleague
     * @param $message
     */
    public function notice(Colleague $colleague, $message)
    {
        if($colleague === $this->coll1 && $message == 'Weekends') {
            return $this->coll1->action();
        }
        if($colleague === $this->coll2 && $message == 'BossIsComing') {
            return $this->coll2->action();
        }
        throw new Exception('No Handler');
    }
}