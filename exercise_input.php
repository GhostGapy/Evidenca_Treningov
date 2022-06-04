<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "2";

    $date=$_GET['msg'];
    echo $date;
?>
<html>
    <head>   
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page.'?msg='.$date.''?>'">
    </head>
    <body>
        <?php
            echo "Hello";
        ?>
    </body>
</html> 
