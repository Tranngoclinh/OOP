<?php
include_once('../ABSTRACKCLASS/Animal.php');
include_once('../ABSTRACKCLASS/chicken.php');
include_once('../ABSTRACKCLASS/Tiger.php');
include_once('../ABSTRACKCLASS/Interface/Edible.php');



$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->moveSound() . '<br>';
    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . ' ';
    }
}