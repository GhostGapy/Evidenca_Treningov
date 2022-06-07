<?php
    session_start();
    require_once 'povezava.php'; 

    $ID=$_GET['msg'];
    echo $ID;
<<<<<<< HEAD
    $sql="DELETE FROM treningi WHERE id='$ID'";

    $result=mysqli_query($link, $sql);

    header("Location:exercises.php");
=======
    //$sql="DELETE FROM treningi WHERE ";

    //$result=mysqli_query($link, $sql);
>>>>>>> 4c46e96ecc98a115bd871fd4e12d40564379661d
?>