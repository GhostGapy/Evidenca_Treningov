<?php
    session_start();
    require_once 'povezava.php'; 

    $ID=$_GET['msg'];
    echo $ID;
    $sql="DELETE FROM treningi WHERE id='$ID'";

    $result=mysqli_query($link, $sql);

    header("Location:exercises.php");
?>