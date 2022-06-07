<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/CSS_register-1.css">
    <title>Register</title>
</head>
<body>
    <h1 id="registerText">REGISTER</h1>
    <div id="redline"></div>
    <div id="registerBox">
        <form action="register_sql.php" methode="post">
            <div id="registerTextbox1">Name:</div><input id="Box" type="text" name="name" required>
            <div id="registerTextbox">Surname:</div> <input id="Box" type="text" name="surname" required>
            <div id="registerTextbox">Mail:</div> <input id="Box" type="mail" name="email" required>
            <div id="registerTextbox">Password:</div> <input id="Box" type="password" name="pass" required>
            <div id="formBtn"><input id="resetbtn" type="reset" value="Reset"><input id="registerbtn" type="submit" name="sub" value="Register"></div>
        </form>
        <div id="haveacc">Already have an account?</div>
        <div><a id="loginbtn" href="login.php">Back to Login</a></div>
    </div>
    <?php include_once('footer.php'); ?>
</body>
</html>