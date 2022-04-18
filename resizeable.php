<?php 
interface Resizeable {
    function resize();
}


class Cricle {
    public string $name;
    public int $radius;
    public function __construct(string $name, int $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }
    
}


class Rectangle {

}


class Square {


}