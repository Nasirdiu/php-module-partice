<?php

function gcd($a, $b) {
    
    $a = abs($a);
    $b = abs($b);
  
    
    if ($a < $b) {
      list($a, $b) = array($b, $a);
    }
  
    
    while ($b > 0) {
      $r = $a % $b;
      $a = $b;
      $b = $r;
    }
  
   
    return $a;
  }

  echo gcd(12,18);
  