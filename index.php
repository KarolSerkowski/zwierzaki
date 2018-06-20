<?php
/**
 * Created by PhpStorm.
 * User: Karol
 * Date: 16.06.2018
 * Time: 17:02
 */

include_once "Meat.php";
include_once "Tiger.php";

$tygrysek = new Tiger();

$kurczak = new Meat(5);

$tygrysek->displayAnimalStats();

$tygrysek->eat($kurczak);

$tygrysek->displayAnimalStats();