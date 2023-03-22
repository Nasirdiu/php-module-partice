<?php

function x($a)
{
    y($a);
}

function y($b)
{
    z($b * 2);
}

function z($c)

{
    // echo $c;
    if ($c < 20) {
        trigger_error("Too Small{$c}");
    }else{
        echo "{$c} Is okky \n";
    }

    debug_print_backtrace();
    // print_r(debug_backtrace());
    
}

function w($d, $e)
{
    x(($d + $e)*5);
}


z(23);
w(2, 3);
