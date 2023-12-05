<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");

    fwrite($file,"phone :");
    fwrite($file, $phone ."\n");

    fwrite($file,"time :");
    fwrite($file, $time ."\n");

    fwrite($file,"date :");
    fwrite($file, $date ."\n");
    fclose($file);
    header("location: rezerwacja.php");
 ?>
