<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="CSS/CSS_login-1.css">
    <!--<link rel="stylesheet" href="CSS/CSS-login.css">-->
</head>
<body>
    <h1>LOGIN</h1>
    <div id="redline"></div>
    <div id=loginBox>
        <form id="formLogin" action="check_user_login.php" method="post">
            <div id="logMailText"></div><input id="mailBox" type="mail" name="email" placeholder="Email:" required>
            <div id="logPassText"></div><input id="passBox" type="password" name="pass" placeholder="Password:" required>
            <div><input id="resetbtn" type="reset" value="Reset"><input id="loginbtn" type="submit" name="sub" value="Login"></div>
        </form>
        <div id="noacc">Don't have an account?</div>
        <div><a id="registerbtn" href="register.php">Register</a></div>
        <div id="cancelLoginDiv"><a id="cancelLogin" href="index.php">Cancel Login</a></div>
    </div>
    <?php include_once('footer.php'); ?>
</body>