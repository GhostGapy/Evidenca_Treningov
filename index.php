<?php session_start(); ?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Fitness</title>
    <link rel="stylesheet" href="CSS/CSS-1.css">
    <link rel="stylesheet" href="CSS/textboxes.css">
    <style>
        html{
            background-color: rgb(20, 20, 20);
            color: white
        }
    </style>
</head>
<body> 
    <div id="topbar">
        <hr style="width:100%" size="100" color="gray">  <!--Top bar-->
    </div>
    <div id="logo1top">
        <a href="index.php"><img id="logo1" src="Slike/fitness logo.png" alt="No image to load" width="100" height="75"></a> <!--Logo-->
    </div>
        <hr style="width:100%" size="10" color=red>  <!--1. rdeca crta-->
    <div id="inlineblock">
        <div id="indexdiv">
            <h1>Better Fitness</h1><!--Naslov-->
            <img id="indeximg2" src="Slike/indeximg2.png" alt="No image to load" width="100%" height="600px"><!--Naslovna slika-->
            <div id="textbox1">
                Uporabite to evidenco treningov za ustvarjanje koledarjev 
                vadbe po meri na spletu z izbiro priljubljenih programov vadbe. <!--Naslovni text 1-->
                Načrte vadbe lahko shranite v svoj račun.
            </div>
        </div>
        <hr style="width:100%" size="10" color=red> <!--2. rdeca crta-->
    </div>
    <div id='textbox2' align="right">
            Verjetno ste že neštetokrat slišali, da je vadba »dobra za vas«. 
            Toda ali ste vedeli, da lahko pomaga tudi vam, da se počutite dobro? <!--Naslovni text 2-->
            Ustrezna količina vadbe lahko dvigne vašo raven energije in celo pomaga 
            izboljšati vaše razpoloženje.
        </div>
        <?php
        if(!isset($_SESSION['name']))
        {
            echo "<div id='loginButton'>
            <a class='loginbtn' href='login.php'>LOGIN</a></div>";
        }
        else
        {
            echo ("<div id='loggedbartext'>Logged in as: ".$_SESSION['name']." ".$_SESSION['surname']." ".$_SESSION['id']."</div>");
            echo (" <div id='logoutButton'>
                        <a class='logoutbtn' href='logout.php'>LOGOUT</a>
                    </div>");
        }
    ?>
</body>
</html>