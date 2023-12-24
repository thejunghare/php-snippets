<?php
/* 
    When a class derives from another class
    The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
    An inherited class is defined by using the extends keyword.
*/

# The final keyword can be used to prevent class inheritance or to prevent method overriding.
class Bike
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    protected function intro()
    {
        echo "Bike is {$this->name} \n";
    }

    public function getname()
    {
        echo "Bike is {$this->name} \n";
    }
}

class Honda extends Bike
{
    public function message()
    {
        echo 'Honda';
        $this->intro();
    }

    # Inherited methods can be overridden
    public function intro()
    {
        echo "Bike is {$this->name} \n";
    }
}

$honda = new Honda("CB Shine");
$honda->message();
$honda->getname();
$honda->intro(); # ERROR