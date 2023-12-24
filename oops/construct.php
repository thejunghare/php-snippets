<?php
/* 
A constructor allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!
*/
class Car{
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    function getname (){
        return $this->name;
    }

    function getcolor (){
        return $this->color;
    }
}

$bmw = new Car('BMW', 'White');
echo $bmw->getname(). "\n";
echo $bmw->getcolor(). "\n";
?>