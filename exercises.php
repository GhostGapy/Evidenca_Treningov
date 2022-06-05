<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "2";
?>
<html>
    <head>   
        <title>Planer</title>
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
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