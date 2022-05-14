<?php session_start(); ?>
<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Prijava</title>
</head>
<body>
    <?php
        require_once 'povezava.php'; 
        if(!isset($_POST['sub']))
        {
            header("location:login.php");
        }
        else
        {
            $email=$_POST['email'];
            $pass=$_POST['pass'];


            $sql="SELECT * FROM users WHERE mail='$email' AND password='$pass'";

            $result=mysqli_query($link, $sql);

            $kolk=mysqli_num_rows($result);

            $row=mysqli_fetch_array($result);
            
            if($kolk==1)
            {
                $_SESSION['id']=$row['id'];
                $_SESSION['name']=$row['name'];
                $_SESSION['surname']=$row['surname'];
                header("location:index.php");
            }
            else
            {
                header("location:login.php");
            }
        }
    ?>
</body>