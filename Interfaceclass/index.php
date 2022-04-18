<?php 
include_once ('../Interfaceclass/Cricle.php');
include_once('../Interfaceclass/Comparable.php');

$cricleone = new ComparableCircle(10,'hinhtron');
$cricletwo = new ComparableCircle(2,'hinhtron1');
$criclethree = new ComparableCircle(5,'hinhtron2');

$test = $cricleone->compareTo($cricleone);
echo $test;