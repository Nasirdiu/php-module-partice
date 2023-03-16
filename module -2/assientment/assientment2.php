<?php
$tuitionFree = 7000;
echo ($tuitionFree >= 7000) ?
    calculateCommission($tuitionFree) : "Invalid Ammount";

function calculateCommission($tuitionFree)
{
    return $tuitionFree;
}
