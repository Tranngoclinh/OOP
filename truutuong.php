<?php
 abstract class Car
{
public abstract function move();
public abstract function stop();

}

abstract class XeHoiNuoc extends Car {
    public abstract function drink();
}

// class Vinfast extends XeHoiNuoc
// {
// public function move(){
//     echo 'haha'.'<br>';
// }

// public function stop()
// {
// echo 'hihi'.'<br>';
// }
// public function drink(){
//     echo 'hehe';
// }

class Vinfast implements Bird,Fish
{
    public function fly(){
        echo 'Bay'.'<br>';
    }
    public function swim()
    {
        echo 'Bơi'.'<br>';
    }
}

interface Bird{
    function fly();
   
}
interface Fish{
    function swim();
}

$vinfast = new Vinfast();
$vinfast->fly();
// $vinfast->swim();


?>