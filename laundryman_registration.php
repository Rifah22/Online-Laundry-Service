<?php
include("../control/registration_process.php");
?>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Laundryman Registration Form </title>
</head>

<body>
    <h1> Laundryman Registration System </h1>
    <hr>
<pre><h4>                                                                                                                        GO BACK TO LOGIN PAGE<a href="../../customer/View/login.php"> Click here</a></h4></pre>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr><td>Full Name: </td><td> <input type = "text" name="fname"></td>
            <td>
                <?php 
                echo $Error_fname;
                ?>
            </td></tr>
            <tr><td>User Name: </td><td> <input type = "text" name="uname"></td>
            <td>
                <?php 
                echo $Error_uname;
                ?>
            </td></tr>
            <tr><td>Birthdate: </td><td> <input type = "date" name="bdate"></td>
            <td>
                <?php 
                echo $Error_bdate;
                ?>
            </td></tr>
            <tr><td>Gender:</td>
            <td><input type="radio" name="gender">Male
            <input type="radio" name="gender">Female
            <input type="radio" name="gender">Others </td>
            <td>
                <?php 
                echo $Error_gender;
                ?>
            </td></tr>
            <tr><td>Email: </td><td> <input type = "text" name="email"></td>
            <td>
                <?php 
                echo $Error_email;
                ?>
            </td></tr>
            <tr><td>Phone Number: </td><td> <input type = "text" name="pnumber"></td>
            <td>
                <?php 
                echo $Error_pnumber;
                ?>
            </td></tr>
            <!-- <tr><td>Upload NID Picture : </td><td><input type="file"  name="nid"></td>
            <td>
                <?php 
                echo $Error_nid;
                ?>
            </td></tr> -->
            <tr><td>Services:</td>
            <td><input type="checkbox" name="washing" value="washing">Washing
            <input type="checkbox" name="drying" value="drying">Drying
            <input type="checkbox" name="ironing" value="ironing">Ironing </td>
            <td>
            <?php 
                echo $Error_service;
                ?>
            </td></tr>
            <tr><td>Password</td><td><input type="password" name="pass"></td>
            <td>
                <?php 
                echo $Error_pass;
                ?>
            </td></tr>
            <tr><td>Confirm Password</td><td><input type="password"name="confirm_pass"></td>
            <td>
                <?php 
                echo $Error_passcmp;
                ?>
            </td></tr>
        </table>
        <input type="submit" name="submitReg" value="Register">
        <input type="reset" name="reset" value="Reset">
    



</form>
</body>
</html>