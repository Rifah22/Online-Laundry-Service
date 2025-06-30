<?php
include("../control/login_Control.php");

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
    <title>login</title>
</head>
<body>
    <div class="center">
        <h1>LOGIN</h1> 
        <div>
            <center>
        <?php
         echo "<span style ='color:red;'>".$userNotfound;
        ?>
        </center>
        </div>       
        <form action="" method="POST">
        
        <div class="txt_field">
                <input type="text" name="uname" placeholder="">
                <span></span>
                <label>Username</label>
                <?php
                    echo $usernameError;
                ?>
        </div>

        <div class="txt_field">
            <input type="password" name="password" placeholder="">
            <span></span>
            <label>Password</label>
                <?php
                    echo  $userPass_Error;
                ?>  
        </div>
        
            <div class="pass">forgot password? <a href="../../home/view/forgot_password.php">Click here</a></div>
            <input type="submit" class="loginButton" name="submitlogin" value="Login">
            <div class="signup_link">
                Not a member? <a href="registrationRole.php"> sign up</a>
            </div>

        </form>
    </div>
</body>
</html>