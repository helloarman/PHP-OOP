<?php

// -- NOTE --
// Abstract Class: An abstract class is a class that cannot be instantiated, meaning you cannot create an object from it directly. Instead, an abstract class is intended to serve as a base or parent class for other classes, providing a blueprint for how they should be implemented.
abstract class MainClass{ // First add abstract keyword before class
    public $number1 = 10;

    abstract public function abstractFunction(); // Second add abstract keyword before a incomplete method.

    function output(){ ;
        echo $this->number1;
    }
}

class ChildClass extends MainClass{ // You need to inherit Abstract Class into a child class 

    public function abstractFunction(){ 
        echo "Child Class";
    }
}

// Now you can make an object of derived class to access main classes components
$child_object = New ChildClass();

// Here is a property of MainClass that you can access by its derived class
echo $child_object->number1;
