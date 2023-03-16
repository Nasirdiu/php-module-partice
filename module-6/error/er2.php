<?php
function myErrorHandler($errno, $errstr, $errfile, $errline) {
    // handle the error
    echo "Error: [$errno] $errstr - $errfile:$errline\n";
  }
  
  // set the error handler
  set_error_handler("myErrorHandler");
  
// log the error to a file
error_log("Error: [$errno] $errstr - $errfile:$errline\n", 3, "/var/log/myphp.log");
  