<html>
    <head>   
        <title>Planer</title>
        <link href="CSS/CSS_calendar.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <?php
            include 'calendar.php';
            
            $calendar = new Calendar();
            
            echo $calendar->show();
        ?>
    </body>
</html> 