<?php

//autoload 
function autoload($name){
    include "{$name}.php";
}

spl_autoload_register('autoload');

(new Spaceship)->lunch();
(new Bike)->getType();

