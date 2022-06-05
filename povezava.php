<?php
    $host="localhost";
    $user="root";
    $password="";
    $database="test2";

    //Povezava na strežnik 
    /*$link=mysqli_connect($host, $user, $password) or 
        die("Povezava na strežnik ni uspela");

    mysqli_select_db($link, $database) or
        die("BUM, nemorem do baze");
    */

    $link=mysqli_connect($host, $user, $password, $database)or 
    die("NE");

    //kodiranje znakov

    mysqli_set_charset($link, "utf8");
?>
