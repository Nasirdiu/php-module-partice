<?php

$finename = "C:\\ostad php\\module\\module-6\\data\\datas.txt";

if (is_writable($finename)) {
    // $existingData=file_get_contents($finename);
    $fp = fopen($finename, "a");

    // fwrite($fp,$existingData);
    fwrite($fp, "Nasir \n");
    fwrite($fp, "Faisal \n");
    fwrite($fp, "Pantho \n");
    fwrite($fp, "Redu \n");
    fclose($fp);
}
