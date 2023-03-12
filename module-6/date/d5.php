<?php

$d1 = new DateTime('1 january 1998');
$d2 = new DateTime('11 March 2023');

$different = date_diff($d1, $d2);

echo $different->format('%y Year %m Month %d days');
