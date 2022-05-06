<?php
    $filename = $_GET['file'];
    $score = $_GET['score'];

    echo $filename;

    $myfile = fopen($filename, "w") or die("Unable to open file!");
    fwrite($myfile, $score);
    fclose($myfile);
?>