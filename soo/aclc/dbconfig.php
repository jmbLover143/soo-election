<?php
    $localserver = "localhost";
    $localuser = "root";
    $localpassword = "";
    $localdatabase = "bpts1";

    $conn = mysqli_connect($localserver, $localuser, $localpassword, $localdatabase);
    session_start();
    // include ('insert_pre_pageant_scores.php');
?>