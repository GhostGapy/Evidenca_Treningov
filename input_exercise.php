<?php session_start(); ?>
<?php 
    $exeName=$_GET['ime'];
    $date=$_GET['datum'];
    $place=$_GET['place'];
    $diff=$_GET['diff'];
    $opis=$_GET['opis'];
?>
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
            header("Location:exercise_input.php?msg=".$date."");
        }
        else
        {
            echo $exeName;
            echo $date;
            echo $place;
            echo $diff;
            echo $opis;
            
            $sql1="SELECT * FROM treningi WHERE datum='$date'";

            $result=mysqli_query($link, $sql1);

            $kolk=mysqli_num_rows($result);
            
            if($kolk==1)
            {
                echo "  <script type='text/JavaScript'> 
                            alert('On this date you already have an exercise!');
                            window.location.href='exercise_input.php?msg=".$date."';
                        </script>";
            }
            else
            {
                $sql2 = "INSERT INTO treningi () VALUES (NULL, '$exeName', '$date', '$opis', (SELECT id FROM kraji_treningov WHERE ime='$place'), '$diff')"; //zapisovanje uporabnikov v tabelo
                
                mysqli_query($link, $sql2);
                header("Location:exercises.php");
            }
        }
    ?>
</body>