<?php
    session_start();
    $date=$_GET['msg'];
    require 'povezava.php'; 
    $currentDate = $_GET['msg'];
    $date = $currentDate." 00:00:00";
<<<<<<< HEAD

    if ($_SESSION['admin']==1) {
        $userID=$_SESSION['userID'];
    }
    else {
        $userID=$_SESSION['id'];
    }

    $sql="SELECT * FROM treningi WHERE users_id=".$userID." AND datum='".$date."';";
=======
    $sql="SELECT * FROM treningi WHERE users_id=".$_SESSION['id']." AND datum='".$date."';";
>>>>>>> 4c46e96ecc98a115bd871fd4e12d40564379661d

    $result=mysqli_query($link, $sql);

    $kolk=mysqli_num_rows($result);

    $row=mysqli_fetch_array($result);
            
    if($kolk==1)
    {
        $ID = $row['id'];
        $exeName=$row['ime_treninga'];
        $place_id=$row['kraj_treninga_id'];
        $user_id=$row['users_id'];
        $diff=$row['tezavnost'];
        $opis=$row['opis'];

        $sql2="SELECT * FROM kraji_treningov WHERE id='".$place_id."';";
        $result2=mysqli_query($link, $sql2);
        $kolk2=mysqli_num_rows($result2);
        $row2=mysqli_fetch_array($result2);
        
        if($kolk2==1)
        {
            $place=$row2['ime'];
        }

        $sql3="SELECT * FROM users WHERE id='".$user_id."';";
        $result3=mysqli_query($link, $sql3);
        $kolk3=mysqli_num_rows($result3);
        $row3=mysqli_fetch_array($result3);
        
        if($kolk3==1)
        {
            $name=$row3['name'];
            $surname = $row3['surname'];
        }

    }
    else
    {
        
    }
?>

<html>
    <head>   
        <title>Insert exercise</title>
        <link href="CSS/CSS_exercises_about.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <h1>ABOUT EXERCISE</h1>
        <div id="redline"></div>
        <div id=loginBox>
            <div id="label0">name of exercise</div>
            <div><?php echo $exeName; ?></div>

            <div id="label">date of exercise</div>
            <div><?php echo $currentDate; ?></div>

            <div id="label">place of exercise</div>
            <div><?php echo $place; ?></div>

            <div id="label">who did the exercise</div>
            <div><?php echo $name." ".$surname; ?></div>

<<<<<<< HEAD
            <div id="label">difficulty of the exercise</div>
            <div id="diff">Difficulty Level: <?php echo $diff; ?></div>

            <div id="label1">description of the exercise</div>
            <div id="opis"><?php echo $opis; ?></div>
            <div id="btnInputDiv"><a id="deleteInput" href="delete_exercise.php?msg=<?php echo $ID ?>">Delete</a><a id="editInput" href="edit_exercise.php?msg=<?php echo $ID ?>">Edit</a></div>
            
            <?php
                if ($_SESSION['admin']==1) {
                    echo "<div id='btnInputDiv'><a id='cancelInput' href='exercises_admin.php'>Cancel</a></div>";
                }
                else {
                    echo "<div id='btnInputDiv'><a id='cancelInput' href='exercises.php'>Cancel</a></div>";
                }
            ?>
        </div>
        <?php include_once('footer.php'); ?>
=======
            <div id="label">Difficulty of the exercise</div>
            <div id="diff">Difficulty Level: <?php echo $diff; ?></div>

            <div id="label1">Description of the exercise</div>
            <div id="opis"><?php echo $opis; ?></div>
            <div id="btnInputDiv"><a id="deleteInput" href="delete_exercise.php?msg=<?php echo $ID ?>">Delete</a><a id="editInput" href="exercises.php">Edit</a></div>
            
            <div id="btnInputDiv"><a id="cancelInput" href="exercises.php">Cancel</a></div>
        </div>
>>>>>>> 4c46e96ecc98a115bd871fd4e12d40564379661d
    </body>
</html> 
