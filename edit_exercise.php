<?php
    session_start();
    require_once 'povezava.php'; 

    $ID=$_GET['msg'];
    $sql="SELECT * FROM treningi WHERE id='$ID';";

    $result=mysqli_query($link, $sql);

    $kolk=mysqli_num_rows($result);

    $row=mysqli_fetch_array($result);
            
    if($kolk==1)
    {
        $exeName=$row['ime_treninga'];
        $place_id=$row['kraj_treninga_id'];
        $user_id=$row['users_id'];
        $diff=$row['tezavnost'];
        $opis=$row['opis'];
        $date=$row['datum'];

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

        $dateonly=explode(" ",$date);
        $date_=$dateonly[0];
    }
?>

<html>
    <head>   
        <title>Update exercise</title>
        <link href="CSS/CSS_exercises_input.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <h1>UPDATE EXERCISE</h1>
        <div id="redline"></div>
        <div id=loginBox>
            <form id="formLogin" action="edit_exercise_sql.php" method="get">
                <input id="ime" type="text" name="ime" placeholder="Name the exercise" maxlength="24" value="<?php echo $exeName ?>" required>
                <div id="datetext">exercise date</div><input id="datum" type="date" name="datum" value="<?php echo $date_ ?>" required hidden>
                <input id="datum" type="date" name="datum" value="<?php echo $date_ ?>" required disabled>
                
                <div id="datetext">exercise place</div>
                <div id="place"><select name="place" required>
                    <option value="Fitness"<?php 
                        if($place=="Fitness")
                        {
                            echo "selected";
                        }
                    ?>>Fitness</option>
                    <option value="Outside" <?php
                        if($place=="Outside")
                        {
                            echo "selected";
                        }
                    ?>>Outside</option>
                    <option value="Other" <?php 
                        if($place=="Other")
                        {
                            echo "selected";
                        }
                    ?>>Other</option>
                    
                </select></div>
                <div id="datetext">exercise difficulty (1 - easy,&nbsp;  10 - hard)</div>
                <div id="diff">
                    <input type="radio" name="diff" value="1" <?php 
                        if($diff=="1")
                        {
                            echo "checked";
                        }
                    ?>>
                    <label id="label">1</label>
                    <input type="radio" name="diff" value="2" <?php 
                        if($diff=="2")
                        {
                            echo "checked";
                        }
                    ?>>
                    <label id="label">2</label>
                    <input type="radio" name="diff" value="3" <?php 
                        if($diff=="3")
                        {
                            echo "checked";
                        }
                    ?>>
                    <label id="label">3</label>
                    <input type="radio" name="diff" value="4" <?php 
                        if($diff=="4")
                        {
                            echo "checked";
                        }
                    ?>>
                    <label id="label">4</label>
                    <input type="radio" name="diff" value="5" <?php 
                        if($diff=="5")
                        {
                            echo "checked";
                        }
                    ?>>
                    <label id="label">5</label>
                    <input type="radio" name="diff" value="6" <?php 
                        if($diff=="6")
                        {
                            echo "checked";
                        }
                    ?>>
                    <label id="label">6</label>
                    <input type="radio" name="diff" value="7" <?php 
                        if($diff=="7")
                        {
                            echo "checked";
                        }
                    ?>>
                    <label id="label">7</label>
                    <input type="radio" name="diff" value="8" <?php 
                        if($diff=="8")
                        {
                            echo "checked";
                        }
                    ?>>
                    <label id="label">8</label>
                    <input type="radio" name="diff" value="9" <?php 
                        if($diff=="9")
                        {
                            echo "checked";
                        }
                    ?>>
                    <label id="label">9</label>
                    <input type="radio" name="diff" value="10" <?php 
                        if($diff=="10")
                        {
                            echo "checked";
                        }
                    ?>>
                    <label id="label">10</label>
                </div>
                <div id="datetext">Description</div>
                <div>
                    <textarea id="opis" name="opis" rows="5" cols="33"><?php echo $opis ?></textarea>
                </div>
                
                <div><input id="resetbtn" type="reset" value="Reset"><input id="savebtn" type="submit" name="sub" value="Save"></div>
            </form>
            <div id="cancelInputDiv"><a id="cancelInput" href="exercise_about.php?msg=<?php echo $date_; ?>">Cancel</a></div>
        </div>
        <?php include_once('footer.php'); ?>
    </body>
</html> 
