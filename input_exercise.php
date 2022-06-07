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
            if ($_SESSION['admin']==1) {
                $userID=$_SESSION['userID'];
            }
            else {
                $userID=$_SESSION['id'];
            }
            echo $userID;

            
            $sql1="SELECT * FROM treningi WHERE datum='$date' AND users_id='".$userID."'";

            $result=mysqli_query($link, $sql1);

            $kolk=mysqli_num_rows($result);
            
            if($kolk==1)
            {
                
            }
            else
            {
                $sql2 = "INSERT INTO treningi () VALUES (NULL, '$exeName', '$date', '$opis', '$diff', (SELECT id FROM kraji_treningov WHERE ime='$place'), '$userID')"; 
                
                mysqli_query($link, $sql2);

                if ($_SESSION['admin']==1) {
                    header("Location:exercises_admin.php");
                }
                else {
                    header("Location:exercises.php");
                }
            }
        }
    ?>
    <?php include_once('footer.php'); ?>
</body>