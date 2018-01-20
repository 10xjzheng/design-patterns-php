<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 17:28
 */

namespace designPatterns\creational\builder;


class Director
{
    /**
     * @param BuilderInterface $builder
     * @return Product
     */
   public function buildProduct(BuilderInterface $builder): Product
   {
       $builder->buildBody();
       $builder->buildPart1();
       $builder->buildPart2();
       return $builder->getResult();
   }
}