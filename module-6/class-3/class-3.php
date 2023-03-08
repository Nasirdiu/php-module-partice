<?php

$filename = "C:\\ostad php\\module\\module-6\\class-3\\data.txt";

$fp=fopen($filename,"a+");//r+,w+,a+ work
fwrite($fp,"Illas \n");
rewind($fp);
// $line=fgets($fp);
// echo $line;
fwrite($fp,"Nasir\n");
$line=fgetc($fp);
echo $line;


// $line=fgets($fp);
// echo $line;
// fseek($fp,0);//rewind($fp)
// fwrite($fp,"Venus");
// fclose($fp);

