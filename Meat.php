<?php
/**
 * Created by PhpStorm.
 * User: Karol
 * Date: 16.06.2018
 * Time: 17:53
 */

include_once "AbstractFood.php";

class Meat extends AbstractFood
{
    protected $type = "Mięsko";
    protected $weight;

    public function __construct($weight)
    {
         $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }


}