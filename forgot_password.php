<?php
 include("../control/forgotpassCheck.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
    <title>forgot password</title>
</head>
<body>
    <div class="center">
        <h2 class="forgot">Forgot Password</h2> 
        <p class="forgot_p">Enter your email address to reset your password</p><hr>
        <div>
            <center>
        <?php
        //  echo "<span style ='color:red;'>".$userNotfound;
        ?>
        </center>
        </div>       
        <form action="" method="POST">
        
        <div class="txt_field">
                <input type="text" name="forgot_email" placeholder="Enter your Email address">
                <span></span>
                <label>Email</label>
                <?php
                    echo "<span style ='color:red;'>".$forgotemail_Error;
                ?>
        </div>
            <input type="submit" class="loginButton" name="submitforgot" value="Continue">
            <div class="forgot_p">Go Back to Login <a href="../../home/view/login.php">Click here</a></div>
        </form>
    </div>
</body>
</html>