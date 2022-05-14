<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="CSS/textboxes.css">
    <link rel="stylesheet" href="CSS/CSS-login.css">
    <style>
        html{
            background-color: rgb(20, 20, 20);
            color: white
        }
    </style>
</head>
<body>
    <h1 id="loginText">LOGIN</h1>
    <hr id="redline1" style="width:1000px" size="10" color="red">
    <div id=loginBox>
        <form id="formLogin" action="check_user_login.php" method="post">
            <spam id="logText">Mail:<spam/> <input id="mailBox" type="mail" name="email" size="40"><br><br>
            <spam id="logText">Password:</spam> <input id="passBox" type="password" name="pass" size="40"><br><br>
            <input id="loginbtn" type="reset" value="Reset">&nbsp;<input id="loginbtn" type="submit" name="sub" value="Login"><br>
        </form>
        <spam id="noacc">Don't have an account?</spam>
        <a id="registerbtn" href="register.php">Register</a>
        <br><a id="cancelLogin" href="index.php">Cancel Login</a>
    </div>
    <div id="wrong">
        Napačno geslo ali mail, poskusi ponovno!!!
    </div>
        
</body>