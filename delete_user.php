<?php session_start(); ?>
<html>
    <head>   
        <title>Planer</title>
        <link href="CSS/CSS_calendar.css" type="text/css" rel="stylesheet" />
        <link href="CSS/CSS_calendar_Admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    <?php  
        require_once 'povezava.php'; 
        
        $userID=$_GET['userID'];
        echo $userID;
        
        $sql="SELECT * FROM users WHERE id=".$userID.";";

        $result=mysqli_query($link, $sql);

        $kolk=mysqli_num_rows($result);

        $row=mysqli_fetch_array($result);
                                  
        if($kolk==1)
        {
            $sql1="DELETE FROM treningi WHERE users_id=".$userID."";

            $result=mysqli_query($link, $sql1);

            $sql2="DELETE FROM users WHERE id=".$userID.";";

            $result=mysqli_query($link, $sql2);
        }
        header("Location:exercises.php");   
    ?>
    </body>
</html> 