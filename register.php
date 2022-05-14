<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/CSS-register.css">
    <link rel="stylesheet" href="CSS/textboxes.css">
    <title>Register</title>
    <style>
        html{
            background-color: rgb(20, 20, 20);
            color: white
        }
    </style>
</head>
<body>
    <h1 id="registerText">REGISTER</h1>
    <hr id="redline1" style="width:1000px" size="10" color="red">

    <div id="registerBox">
        <form action="register_database.php" methode="post">
            <spam id="registerTextbox1">Name:</spam><input id="nameBox" type="text" name="name" size="40"><br><br>
            <spam id="registerTextbox2">Surname:</spam> <input id="surnameBox" type="text" name="pass" size="40"><br><br>
            <spam id="registerTextbox3">Mail:</spam> <input id="mailBox" type="mail" name="email" size="40"><br><br>
            <spam id="registerTextbox4">Password:</spam> <input id="passBox" type="password" name="pass" size="40"><br><br>
            <input id="registerbtn" type="reset" value="Reset">&nbsp;<input id="registerbtn" type="submit" name="sub" value="Register"><br>
        </form>
        <spam id="haveacc">Already have an account?</spam><br>
        <a id="loginbtn" href="login.php">Back to Login</a>
    </div>
</body>
</html>