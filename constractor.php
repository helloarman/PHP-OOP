<?php

class main{
    public $number1, $number2, $sum;

    function __construct()
    {
        $this->number1 = 10;
        $this->number1 = 20;
        $this->sum = $this->number1 + $this->number1;

    }

    function output(){
        echo $this->sum;
    }
}

$main_object = New main;
$main->output();