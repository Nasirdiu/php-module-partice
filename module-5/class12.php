<?php

 class MathCalculator{
    private $number;
    static $name;

    static function fibonacci($n){
        echo self::$name."\n";
        self :: doSomthing();
        echo "Fibonace series up to {$n}\n";
    }

    static function doSomthing(){
        echo "Doning somthing \n";
    }
     function fionce($n){
        self::$name="ABC";
        self::doSomthing();
        $this->doSomthing();
        $this ->number=12;
        echo "Calculate firbonace of {$n}\n";
    }
 }

 $mathc=new MathCalculator();
 $mathc->fionce(8);

 MathCalculator::fibonacci(7);
 echo MathCalculator::$name;