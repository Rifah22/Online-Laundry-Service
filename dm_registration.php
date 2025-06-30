<?php
include("../control/dm_process.php");
?>
<html lang="en">
     <center>
          <br>
<input type="image" src="../image/img4.png"  height="200" width="1500" >
<head>
    
    <title>Registration</title>
</head>
<body>
<h1>Fill Up The Form For Free Signup!</h1><hr><br>

<pre><h4>                                                                                                                        GO BACK TO LOGIN <a href="../../customer/View/login.php">Click here</a></h4></pre>
<form action="" method="POST" enctype="multipart/form-data">
<table>
    <tr><td>Full Name : </td> 
    <td><input type="text" placeholder="" name="dmf_name"></td>
    <td> <?php
            echo $Error_f_name;
       ?>
       </td></tr>
       <tr><td>Username : </td>
       <td><input type="text" placeholder="" name="dmu_name"></td>
       <td> <?php
            echo $Error_username;
       ?>
       </td></tr>
       <tr><td>Email : </td>
       <td><input type="text" placeholder="" name="dmmail"></td>
       <td> <?php
            echo $Error_email;
       ?>
       </td></tr>
       <tr><td>Phone Number : </td> 
       <td><input type="tel" placeholder="" name="dmphn_number"></td>
       <td> <?php
            echo $Error_number;
       ?>
       <tr><td>NID : </td> 
       <td><input type="text" placeholder="" name="dmnid_number"></td>
       <td> <?php
            echo $Error_nid;
       ?>
       <tr><td>Driving License : </td> 
       <td><input type="text" placeholder="" name="dmdl_number"></td>
       <td> <?php
            echo $Error_dl;
       ?>
       <tr><td>Experience(year) : </td> 
       <td><input type="number" placeholder="" name="dmexp_number"></td>
       <td> <?php
            echo $Error_exp;
       ?>
       </td></tr>
       <tr><td>Nationality : </td>
       <td><input type="text" placeholder="" name="dmnat_name"></td>
       <td> <?php
            echo $Error_nat;
       ?>
       <tr><td>Birthday : </td> 
       <td><input type="date" placeholder="" name="dmage"></td>
       <td> <?php
            echo $Error_date;
       ?>
        </td></tr>
       <tr><td>Password : </td>
       <td><input type="password" placeholder="" name="dmpass"></td>

       <td> <?php
            echo $Error_pass;
       ?>
        </td></tr>
       <tr><td>Confirm Password : </td>
       <td><input type="password" placeholder="" name="dmconfirm_pass"></td>
       <td> <?php
            echo $Error_pass_cmp;
       ?>
        </td></tr>
       <tr><td>Gender : </td>
       <td><input type="radio" name="dmgender" value="Male">Male
        <input type="radio" name="dmgender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other</td>
        <td> <?php
            echo $Error_gender;
       ?>
      </td></tr>
      <tr><td>Upload resume : </td>
        <td><input type="file"  name="dmmyfile"></td>
        <td>
        <?php
            echo $Error_file;
       ?>
     </td></tr>
</table>
<br><input type="submit" name="submitRegdm" value="Register">
       <input type="Reset" name="Resetdm" value="Reset">
</form>

<input type="image" src="../image/img10.jpg"  height="200" width="1500" >
</body>
</center>
</html>