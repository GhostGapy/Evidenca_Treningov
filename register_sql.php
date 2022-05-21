<?php session_start(); ?>
<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Register</title>
</head>
<body>
    <?php
        require_once 'povezava.php'; 
        if(!isset($_GET['sub']))
        {
            header("location:register.php");
        }
        else
        {
            $name=$_GET['name'];
            $surname=$_GET['surname'];
            $email=$_GET['email'];
            $pass=$_GET['pass'];

            $pass1 = md5($pass);

            $sql1="SELECT * FROM users WHERE mail='$email'";

            $result=mysqli_query($link, $sql1);

            $kolk=mysqli_num_rows($result);

            
            if($kolk==1)
            {
                echo "  <script type='text/JavaScript'> 
                            alert('Ta mail je že v uporabi');
                            window.location.href='register.php';
                        </script>";
            }
            else
            {
                $sql2 = "INSERT INTO users () VALUES (NULL, '$name', '$surname', '$email', '$pass1')"; //zapisovanje uporabnikov v tabelo
                
                mysqli_query($link, $sql2);
                header("Location:login.php");
            }
        }
    ?>
</body>