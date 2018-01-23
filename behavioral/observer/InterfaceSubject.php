<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 10:18
 */

namespace designPatterns\behavioral\observer;


Interface InterfaceSubject
{
     public function attach(InterfaceObserver $observer);

     public function detach(InterfaceObserver $observer);

     public function notify();

     public function getState();

     public function setState($state);
}