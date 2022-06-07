<?php session_start(); ?>
<html>
    <head>   
        <title>Planer</title>
        <link href="CSS/CSS_calendar.css" type="text/css" rel="stylesheet" />
        <link href="CSS/CSS_calendar_Admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    <div id="back"><a href="exercises.php"><img src="Slike/back.png" width="50" height="50" alt="No image"></a></div>
        <?php  
            echo "<div id='belong'>This calendar belongs to: ".$_SESSION['chosenName']." ".$_SESSION['chosenSurname']."</div>";
                session_abort();
                include 'calendar.php';
            
                $calendar = new Calendar();
            
                echo $calendar->show();
        ?>
        <?php include_once('footer.php'); ?>
    </body>
</html> 