<?php
$filename = "C:\\ostad php\\module\\module-6\\class-4\\data.txt";

file_put_contents($filename, "Apple\n", FILE_APPEND | LOCK_EX); //FILE_APPEND
file_put_contents($filename, "Law\n", FILE_APPEND | LOCK_EX);

