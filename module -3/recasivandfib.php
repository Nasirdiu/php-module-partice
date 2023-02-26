<?php
function fibonacchi($old, $new,  $end)
{

    static $start;
    $start = $start ?? 1;

    if ($start > $end) {
        return;
    }
    $start++;

    echo $old . " ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacchi($old, $new, $end);
}
fibonacchi(0, 1, 10);
