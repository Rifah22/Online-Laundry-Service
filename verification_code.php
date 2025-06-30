<?php
 include("../control/get_verifyCode.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
    <title>verify</title>
</head>
<body>
    <div class="center">
        <h2 class="forgot">Email verification</h2> 
        <p class="forgot_p">Check your email address for verification code</p><hr>
        <div>
            <center>
        <?php
        //  echo "<span style ='color:red;'>".$userNotfound;
        ?>
        </center>
        </div>       
        <form action="" method="POST">
        <div class="txt_field">
                <input type="text" name="verifiy_code" placeholder="Enter verification code">
                <span></span>
                <label>Code</label>
                <?php
                    echo "<span style = 'color:red;'>".$verification_Error;
                ?>
        </div>
            <input type="submit" class="loginButton" name="submitverification" value="Submit">
            <div class="forgot_p">Go Back to Login <a href="../../home/view/login.php">Click here</a></div>
        </form>
    </div>
</body>
</html>