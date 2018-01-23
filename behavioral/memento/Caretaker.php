<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 18:36
 */

namespace designPatterns\behavioral\memento;


use PHPUnit\Runner\Exception;

class Caretaker
{
    private $storage;

    public function store($key, Memento $memento)
    {
        $this->storage[$key] = $memento;
    }

    public function get($key)
    {
        if(empty($this->storage[$key])) {
            throw new Exception('Not Exist!');
        }
        return $this->storage[$key];
    }
}