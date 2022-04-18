<?php 
include_once('../ABSTRACKCLASS/Animal.php');
include_once ('../ABSTRACKCLASS/Interface/Edible.php');

class Chicken extends Animal implements Edible
{
    public function moveSound()
    {
        echo "Chicken: cluck cluck";
    }
    public function howToEat()
    {
        return "ò ó o";
    }
}