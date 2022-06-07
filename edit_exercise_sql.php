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
    <title>SQL</title>
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
            
            $sql1="SELECT * FROM treningi WHERE users_id=".$userID." AND datum='".$date."';";

            $result=mysqli_query($link, $sql1);

            $kolk=mysqli_num_rows($result);

            $row=mysqli_fetch_array($result);
            
            if($kolk==1)
            {
                $treningID=$row['id'];
                echo $treningID;
                $sql2 = "INSERT INTO treningi () VALUES (NULL, '$exeName', '$date', '$opis', '$diff', (SELECT id FROM kraji_treningov WHERE ime='$place'), '$userID')"; 
                $sql = "UPDATE treningi SET ime_treninga = '$exeName', 
                                            datum = '$date', 
                                            opis = '$opis', 
                                            tezavnost = '$diff', 
                                            kraj_treninga_id = (SELECT id FROM kraji_treningov WHERE ime='$place'), 
                                            users_id = '$userID' 
                        WHERE id = $treningID";
                
                mysqli_query($link, $sql);

                if ($_SESSION['admin']==1) {
                    header("Location:exercises_admin.php");
                }
                else {
                    header("Location:exercises.php");
                }
            }
            else
            {
                
            }
        }
    ?>
</body>