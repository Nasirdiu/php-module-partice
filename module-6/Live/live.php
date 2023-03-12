<?php
/*
// Write a PHP script that reads the contents of a file named "ostad.txt", adds the current date and time to the contents of the file, and saves it back to the file. If the file does not exist, the script should create it.


$file_name = "ostad.txt";
$current_time = date("Y-m-d H:i:s"); 

if (file_exists($file_name)) {
  
  $file_contents = file_get_contents($file_name);
  
 
  $file_contents .= "\n$current_time";
  
  
  file_put_contents($file_name, $file_contents);
} else {
  
  $file_contents = $current_time;
  file_put_contents($file_name, $file_contents);
}

echo "Done";

*/


$file_name = "ostad.txt";
$current_time = date("Y-m-d H:i:s"); 


$file = fopen($file_name, "r+");

if ($file) {

  flock($file, LOCK_EX);
  

  $file_contents = fread($file, filesize($file_name));
  

  $file_contents .= "\n$current_time";
  
 
  fseek($file, 0);
  
  
  fwrite($file, $file_contents);
  
 
  ftruncate($file, ftell($file));
  
 
  flock($file, LOCK_UN);
  fclose($file);
} else {
 
  $file = fopen($file_name, "w");
  fwrite($file, $current_time);
  fclose($file);
}

echo "Done";

?>



