<?php
/* 
    A constructor allows you to initialize an object's properties upon creation of the object.

    If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

    Notice that the construct function starts with two underscores (__)!
*/
class Car
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function getname()
    {
        return $this->name;
    }

    function getcolor()
    {
        return $this->color;
    }

    /* 
        A destructor is called when the object is destructed or the script is stopped or exited.

        If you create a __destruct() function, PHP will automatically call this function at the end of the script.
    */

    function __destruct()
    {
        # echo $this->name . "\n";
        # echo $this->color . "\n";
        # OR
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

$bmw = new Car('BMW', 'White');
/*
    # This statements are not required if used destructor 
    echo $bmw->getname() . "\n";
    echo $bmw->getcolor() . "\n"; 
*/
?>