<?php session_start(); ?>
<html>
    <head>   
        <title>Planer</title>
        <link href="CSS/CSS_calendar.css" type="text/css" rel="stylesheet" />
        <link href="CSS/CSS_calendar_Admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <?php
        $checkAdmin=$_SESSION['admin'];
        if(!isset($_SESSION['id']))
        {
            echo "  <script type='text/JavaScript'> 
                            alert('For this website you have to be logged in!');
                            window.location.href='login.php';
                        </script>";
        }
        ?>
        <div id="back"><a href="index.php"><img src="Slike/back.png" width="50" height="50" alt="No image"></a></div>
        <?php  
            require_once 'povezava.php'; 

            $sql="SELECT COUNT(*) FROM users;";

            $result=mysqli_query($link, $sql);
            $kolk=mysqli_num_rows($result);
            $row=mysqli_fetch_array($result);

            $count=$row[0];
            $x=0;
            if ($checkAdmin==1) 
            {
                echo "<h1>CHOOSE USER</h1>
                <div id='redline'></div>
                <div id=loginBox>
                    <form id='formLogin' action='chooseUser.php' method='get'>
                        <div id='label'>Who's table do you want to see?</div>
                        <div id='chooseUser'><select name='userID' required>";
                            for ($i=0; $i < $count; $i++) 
                            { 
                                $x++;
                                $sql="SELECT * FROM users WHERE id='$x';";

                                $result=mysqli_query($link, $sql);

                                $kolk=mysqli_num_rows($result);

                                $row=mysqli_fetch_array($result);
                                        
                                if($kolk==1)
                                {
                                    $userID=$row['id'];
                                    $name=$row['name'];
                                    $surname=$row['surname'];

                                    echo "<option value='".$userID."'>".$name." ".$surname."</option>";
                                }
                                else
                                {
                                    $i--;
                                }
                            }
                        echo "</select></div>
                        <div><input id='resetbtn' type='reset' value='Reset'><input id='loginbtn' type='submit' name='sub' value='Choose'></div>
                    </form>
                    
                    <div id='cancelLoginDiv'><a id='cancelLogin' href='index.php'>Cancel</a></div>
                </div>";
            }
            else
            {
                session_abort();
                include 'calendar.php';
            
                $calendar = new Calendar();
            
                echo $calendar->show();
            }
        ?>
        <?php include_once('footer.php'); ?>
    </body>
</html> 