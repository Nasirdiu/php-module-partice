<?php

class MOtorCycle
{
  private $parameters;

    function __construct($displacement, $capacity, $mileage)
    {
        $this->parameters = [];
        $this->parameters['mileage'] = $mileage;
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        
    }
    // function getDisplacement()
    // {
    //     return $this->parameters['displacement'];
    // }
    // function setDisplacement($displacement)
    // {
    //     $this->parameters['displacement'] = $displacement;
    // }

    function __isset($name){
        if(!isset($this->parameters['$name'])){
            echo "{$name} not found\n";
            return false;
        }
        return true;
    }

    function __unset($name){
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }
    function __get($name){
        echo $this->parameters[$name];//$this displacement
    }
    function __set($name,$value){
        echo $this->parameters[$name]=$value;//$this displacement
    }

}

$pulsar = new MOtorCycle('150 cc', '16 liter', '40 kmph');

// echo $pulsar->getDisplacement();
// $pulsar->displacement='135cc';
// echo $pulsar->displacement;

if(isset($pulsar->trisize)){
    echo "Found";
}else{
    echo"Not Found";
}

unset($pulsar->mileage);

