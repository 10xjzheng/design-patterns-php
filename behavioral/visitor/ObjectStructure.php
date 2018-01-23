<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 15:08
 */

namespace designPatterns\behavioral\visitor;


class ObjectStructure
{
    private $elements;

    private $result;

    public function addElement(InterfaceElement $element)
    {
        $this->elements[] = $element;
    }

    public function visitAll(InterfaceVisitor $visitor)
    {
        $this->result = [];
        foreach ($this->elements as $element) {
            $this->result[] = $element->accept($visitor);
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}