<?php session_start(); ?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Fitness</title>
    <link rel="stylesheet" href="CSS/CSS_index-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--<link rel="stylesheet" href="CSS/textboxes.css">-->
</head>
<body>
    <div id="topbar">
    <?php
        if(!isset($_SESSION['name']))
        {
            echo "<div id='loginButton'>
            <a class='loginbtn' href='login.php'>LOGIN</a></div>";
        }
        else
        {
            echo ("<div id='loggedbartext'>Logged in as: ".$_SESSION['name']." ".$_SESSION['surname']." &nbsp; <a class='logoutbtn' href='logout.php'>LOGOUT</a></div>");
        }
    ?><!--Top bar--></div>
    <div id="logo1top">
        <a href="index.php"><img id="logo1" src="Slike/fitnessLogo.png" alt="No image to load" width="100" height="75"></a>
    </div>
    </div>
    <div id="redline"></div>
    <div id="box1"> 
        <h1>Better Fitness</h1><!--Naslov-->
        <!--<img id="indeximg2" src="Slike/indeximg2.png" alt="No image to load">--><!--Naslovna slika-->
        <div id="textbox1">
            Verjetno ste že neštetokrat slišali, da je vadba »dobra za vas«. 
            Toda ali ste vedeli, da lahko pomaga tudi vam, da se počutite dobro? <!--Naslovni text 2-->
            Ustrezna količina vadbe lahko dvigne vašo raven energije in celo pomaga 
            izboljšati vaše razpoloženje.
        </div>
    </div>
    
    <div id="box2"> 
        <div id='textbox2'>
            Uporabite to evidenco treningov za ustvarjanje koledarjev 
            vadbe po meri na spletu z izbiro priljubljenih programov vadbe. <!--Naslovni text 1-->
            Načrte vadbe lahko shranite v svoj račun.
        </div>
    </div>
        
    <?php
        if(!isset($_SESSION['name']))
        {
            echo ("<div id='calendar'><a href='exercises.php' id='calendarlink_en'>OPEN CALENDAR</a></div>");
        }
        else
        {
            echo ("<div id='calendar'><a href='exercises.php' id='calendarlink_dis'>OPEN CALENDAR</a></div>");
        }
    ?>
    

    <?php include_once('footer.php'); ?>

</body>
</html>