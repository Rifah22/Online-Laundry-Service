<?php
 include("../control/reset_password.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
    <title>new password</title>
</head>
<body>
    <div class="center">
        <h2 class="forgot">New Password</h2> 
        <p class="forgot_p">Please create a new password that you didn't use on any other site</p><hr>
        <div>
            <center>
        <?php
        //  echo "<span style ='color:red;'>".$userNotfound;
        ?>
        </center>
        </div>       
        <form action="" method="POST">
        
        <div class="txt_field">
                <input type="text" name="new_pass" placeholder="Create a new password">
                <span></span>
                <!-- <label>New Password</label> -->
                <?php
                     echo "<span style = 'color:red;'>".$passreset_Error;
                ?>
        </div>

        <div class="txt_field">
            <input type="password" name="confirm_pass" placeholder="Confirm your password">
            <span></span>
            <!-- <label>Password</label> -->
                <?php
                     echo  "<span style = 'color:red;'>".$passreset_Error;
                ?>
                
        </div>
            <input type="submit" class="loginButton" name="submit_newpass" value="Change">
            <div class="forgot_p">Go Back to Login <a href="../../home/view/login.php">Click here</a></div>

        </form>
    </div>
</body>
</html>