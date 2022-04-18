<?php 
include_once('../Interfaceclass/Cricle.php');
interface Comparable {
 public function compareTo($objTwo);
}

class ComparableCircle extends Cricle implements Comparable
{
    public function compareTo($objTwo)
    {
        $circleTwoRadius = $objTwo->getRadius();

        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        } else if ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}