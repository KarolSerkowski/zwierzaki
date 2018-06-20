<?php
/**
 * Created by PhpStorm.
 * User: Karol
 * Date: 16.06.2018
 * Time: 17:05
 */

abstract class AbstractAnimal
{
    protected $speciesOfAnimal;

    protected  $food;
    protected $age;
    protected $weight;

//    abstract public function eat($food, $weight);
    abstract public function eat(AbstractFood $food);
    abstract public function displayAnimalStats();
//    abstract public function run ();


}