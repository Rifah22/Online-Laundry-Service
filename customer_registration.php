<?php
include_once("../control/process.php");
?>
<html lang="en">
<head>
     <title>Registration</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/customer_RegStyle.css">
    
    
</head>
<body>                                                                                                     
<div class="container">
     <div class="heading"><b>Registration</b> </div>
     <form action=""  method="POST" enctype="multipart/form-data" onsubmit="return form_check()">

 
     <div class="user-details">
     <div>
         <p class="ferror" id= "errorform"></p>
     </div>
          <div class="user-box">
               <p class=details> Full Name</p>
               <input type="text" placeholder="Enter your full name" name="f_name" id = "f_name" onkeyup="check_fullname()">
               <p id="fullname_error"></p>
                    <?php
                          echo $Error_f_name;
                       
                    ?>
          </div>
          <div class="user-box">
               <p class=details> Username</p>
               <input type="text" placeholder="Enter your username" name="u_name" id="u_name" onkeyup="check_username()">
               <p id="username_error"></p>
               <!-- <p id="$nameExist"></p> -->
                    <?php
                         echo $Error_username;
                    ?>
          </div>

          <div class="user-box">
               <p class=details> Email </p>
               <input type="text" placeholder="Enter your email address" name="mail" id="mail" onkeyup="check_email()">
               <p id="email_error"></p>
                    <?php
                         echo $Error_email;
                    ?>
          </div>

          <div class="user-box">
               <p class=details>Phone Number</p>  
               <input type="number" placeholder="Enter phone number" name="phn_number" id = "phn_number" onkeyup="check_phone()">
               <p id="phone_error"></p>
                    <?php
                         echo $Error_number;
                    ?>
          </div>

          <div class="user-box">
               <p class=details>Birthday</p> 
               <input type="date" placeholder="" name="age" id="age" onchange="check_birthday()">
               <p id="birthday_error"></p>
                    <?php
                         echo $Error_date;
                    ?>
          </div>
          <div class="user-box">
               <p class=details> Password</p>
               <input type="password" placeholder="Enter your password" name="pass" id="pass" onkeyup="check_password()">
               <p id="password_error"></p>
                    <?php
                         echo $Error_pass;
                    ?>
          </div>
          <div class="user-box">
               <p class=details> Confirm Password</p> 
               <input type="password" placeholder="Confirm password" name="confirm_pass" id="confirm_pass" onkeyup="check_confirm_password()">
               <p id="cp_error"></p>
                    <?php
                         echo $Error_pass_cmp;
                    ?>
          </div>
          <div class="user-box">
               <p class=details>Complete Address</p>
               <textarea class="address" name="c_address" rows="4" cols="42" id = "c_address" onkeyup="check_address()"></textarea>
               <p id="address_error"></p>
                    <?php
                         echo $Error_address;
                    ?>
          </div>
          <div class="gender">
               <p class=gender-title> Gender</p>
               <div class="category">
                    <input type="radio" class="radio" id="rd1" name="gender" value="Male" onchange="check_gender()">Male
                    <!-- <label for="male">Male</label> -->
                    <input type="radio" class="radio" id="rd2" name="gender" value="Female" onchange="check_gender()">Female
                    <!-- <label for="female">Female</label> -->
                    <br><p id="gender_error"></p>
                         <?php
                              echo $Error_gender;
                         ?>
               </div>
          </div>
          <input type="Reset" class="button resetButton" name="Reset" value="Reset">  
          <input type="submit" class="button submitButton" name="submitReg" value="Register">
     </div>
     <div> <p class = "terms"> By clicking the Register button you agree to our <a href="">Terms and conditions</a> and <a href="">police privacy</a></p></div>
     <div><p class="LinkLogin">Already have an account? <a href="../../home/view/login.php">Login here</a></p></div>
</form>
</div>
  
<script src="../js/cReg_script.js"></script>
</body>
</html>
