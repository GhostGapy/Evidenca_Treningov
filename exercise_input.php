<?php
    $date=$_GET['msg'];
?>

<html>
    <head>   
        <title>Insert exercise</title>
        <link href="CSS/CSS_exercises_input.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <h1>INSERT EXERCISE</h1>
        <div id="redline"></div>
        <div id=loginBox>
            <form id="formLogin" action="input_exercise.php" method="get">
                <input id="ime" type="text" name="ime" placeholder="Name the exercise" required>
                <div id="datetext">exercise date</div><input id="datum" type="date" name="datum" value="<?php echo $date ?>" required>
                <div id="datetext">exercise place</div>
                <div id="place"><select name="place" required>
                    <option value="Fitness">Fitness</option>
                    <option value="Outside">Outside</option>
                    <option value="Other">Other</option>
                </select></div>
                <div id="datetext">exercise difficulty (1 - easy,&nbsp;  10 - hard)</div>
                <div id="diff">
                    <input type="radio" name="diff" value="1" checked>
                    <label id="label">1</label>
                    <input type="radio" name="diff" value="2">
                    <label id="label">2</label>
                    <input type="radio" name="diff" value="3">
                    <label id="label">3</label>
                    <input type="radio" name="diff" value="4">
                    <label id="label">4</label>
                    <input type="radio" name="diff" value="5">
                    <label id="label">5</label>
                    <input type="radio" name="diff" value="6">
                    <label id="label">6</label>
                    <input type="radio" name="diff" value="7">
                    <label id="label">7</label>
                    <input type="radio" name="diff" value="8">
                    <label id="label">8</label>
                    <input type="radio" name="diff" value="9">
                    <label id="label">9</label>
                    <input type="radio" name="diff" value="10">
                    <label id="label">10</label>
                </div>
                <div id="datetext">Description</div>
                <div>
                    <textarea id="opis" name="opis" rows="5" cols="33"></textarea>
                </div>
                <div><input id="resetbtn" type="reset" value="Reset"><input id="savebtn" type="submit" name="sub" value="Save"></div>
            </form>
            <div id="cancelInputDiv"><a id="cancelInput" href="exercises.php">Cancel</a></div>
        </div>
    </body>
</html> 
