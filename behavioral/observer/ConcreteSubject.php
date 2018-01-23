<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 10:31
 */

namespace designPatterns\behavioral\observer;


class ConcreteSubject implements InterfaceSubject
{
    private $observers;

    private $state;

    public function attach(InterfaceObserver $observer)
    {
        $this->observers[] = $observer;
    }
    
    public function detach(InterfaceObserver $observer)
    {
        foreach ($this->observers as $key => $obs) {
            if($obs === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
        $this->notify();
    }
}