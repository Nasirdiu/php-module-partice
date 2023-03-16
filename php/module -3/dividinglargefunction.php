<?php


//bad function
function a(){
    echo "step A done \n";
}
function b(){
    echo "step B done \n";
}
function c(){
    echo "step c done \n";
}
function d(){
    echo "step d done \n";
}
function doTheLargerTask(){
   a();
   b();
   c();
   c();
}
doTheLargerTask();