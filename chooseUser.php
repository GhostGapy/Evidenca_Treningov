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
        
        echo $_GET['userID'];

        $sql="SELECT * FROM users WHERE id='".$_GET['userID']."';";

        $result=mysqli_query($link, $sql);

        $kolk=mysqli_num_rows($result);

        $row=mysqli_fetch_array($result);
                                        
        if($kolk==1)
        {
            $_SESSION['userID']=$row['id'];
            $_SESSION['chosenName']=$row['name'];
            $_SESSION['chosenSurname']=$row['surname'];   
            
            header("Location:exercises_admin.php");
        }

        
    ?>
    </body>
</html> 