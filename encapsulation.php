<?php

// -- NOTE --
// Encapsulation is a fundamental principle in object-oriented programming (OOP) that refers to the bundling of data and code into a single unit, such as a class.
class DemoClass{
    public $number1 = 10;
    public $number2 = 20;

    function sum(){
        $sum = $this->number1 + $this->number2;

        return $sum;
    }

    function sub(){
        $sub = $this->number1 - $this->number2;

        return $sub;
    }
}

// -- NOTE --
// Object is an instance of a class that encapsulates data and behavior.
$main_object = New DemoClass(); // "New" keyword is used to create a new object instance of a class.

// How we can Access property From an Object 
echo $main_object->number1;

echo "<br>";
// How we can Access Method From an Object 
echo $main_object->sum();