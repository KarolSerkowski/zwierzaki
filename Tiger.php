<?php
/**
 * Created by PhpStorm.
 * User: Karol
 * Date: 16.06.2018
 * Time: 17:04
 */
include_once "AbstractAnimal.php";

class Tiger extends AbstractAnimal
{
    protected $weight;
    protected  $age;
    protected $name = "tygrys";
    protected $speciesOfAnimal = "ssak";
    protected $food;

    public function __construct()
    {
        $this -> weight = 1;
        $this -> age = 1;

    }


    public function eat(AbstractFood $food)
    {
        $this->food=$food;
        $this -> weight += $this->food->getWeight();


        echo "Zjadłem".$this->food->getType()."</br>";
    }

    public function displayAnimalStats()
    {
        echo "Jestem $this->name ";
        echo "Mam za sobą $this->age lat ";
        echo "Ważę obecnie $this->weight kg";
        echo '</br>';


    }


}