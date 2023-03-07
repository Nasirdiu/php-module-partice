<?php
$filename = "D:\Nasir php\module-6\data.txt";

if (is_readable($filename)) {
    $fp = fopen($filename, "r");
    while ($line = fgets($fp)) {
        echo $line;
    }
}



// $line=fgets($fp);
// echo $line;
// $line=fgets($fp);
// echo $line;
// $line=fgets($fp);
// echo $line;




// rewind($fp);
fseek($fp, 10);
fseek($fp, -1, SEEK_END);
while ($line = fgets($fp, 2)) {
    echo $line . "\n";
}

fclose($fp);

// if ($fp ) {
//     while (($line = fgets($fp )) !== false) {
//         echo $line;
//     }
//     fclose($fp );
// } else {
//     echo "Error: could not open file.";
// }

echo "\n";
$data = file($filename);
echo $data[2];
print_r($data);
echo "\n";

$data = file_get_contents($filename);
echo $data;
