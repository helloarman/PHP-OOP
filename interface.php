<?php

// -- NOTE --
// Interface Class: Interface is a collection of abstract methods that define a set of behaviors that a class must implement.
interface interfaceClass1{ // First add interface keyword before class name
    function interfaceFunction1($a, $b); // Second add interface keyword before a incomplete method.

}

interface interfaceClass2{ 
    function interfaceFunction2($a, $b); 

}

class ChildClass implements interfaceClass1, interfaceClass2{ // You need to inherit implements Class into a child class, You can add multiple interfaces on one derived class 

    public function interfaceFunction1($x, $y){ 
        echo $x." got ".$y." Pint On Mid Exam";
    }

    public function interfaceFunction2($x, $y){ 
        echo $x." got ".$y." Pint On Final Exam";
    }
}

// Now you can make an object of derived class to access main classes components
$child_object = New ChildClass();

// Here is a property of interfaceClass1 that you can access by its derived class
echo $child_object->interfaceFunction1('Arman Rahman', 35);
