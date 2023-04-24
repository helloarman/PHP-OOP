<?php

class main{
    public $number1, $number2, $sum, $sub;

    // -- NOTE --
    // Construct: construct is a special method within a class that is automatically called when an object of that class is created. The construct method is used to initialize the object's properties or perform any necessary setup tasks.
    function __construct($var1, $var2)
    {
        // -- NOTE --
        // "$this" keyword refers to the current object instance.
        $this->number1 = $var1; // "->" it's Called Arrow Operator
        $this->number2 = $var2;
    }

    function sum(){
        $this->sum = $this->number1 + $this->number2;

        return $this->sum;
    }

    function sub(){
        $this->sub = $this->number1 - $this->number2;

        return $this->sub;
    }

    function output(){
        return 'Sum = '.$this->sum().'<br>'.'Sub= '.$this->sub() ;
    }
}

// -- NOTE --
// Object is an instance of a class that encapsulates data and behavior.
$main_object = New main(20, 40); // "New" keyword is used to create a new object instance of a class.

// How we can Access Property From an Object 
echo $main_object->number1;

echo "<br>";
// How we can Access Method From an Object 
echo $main_object->output();