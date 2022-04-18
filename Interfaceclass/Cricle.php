<?php
class Cricle
{
    public int $radius;
    public string $name;
    public function __construct( int $radius, string $name)
    {
        $this->radius = $radius;
        $this->name = $name;
    }
    public function getRadius(){
    return $this->radius; 
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function getName(){
        $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
}