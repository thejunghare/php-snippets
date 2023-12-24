<?php
#Define a class
class Fruit
{
    #Define objects
    public $name;

    #methods
    function setName($name)
    {
        # The $this keyword refers to the current object, and is only available inside methods.
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }


}

$apple = new Fruit();
$apple->setName('Apple');

echo $apple->getName(). "\n";


var_dump($apple instanceof Fruit); #check if an object belongs to a specific class, returns true if belongs
?>