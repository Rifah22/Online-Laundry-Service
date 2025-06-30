<?php
include("../control/customer_ProfileControl.php");
include("../control/profileUpdate.php");
?>
<?php
//include("../control/customerSession_check.php");
//include("../control/customerCookie.php");
if (!isset($_SESSION)) {
    session_start();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/dashboard_style.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard_inside.css">
    <title>customer profile</title>
</head>
<body>
<!-- <div class="cartbox" id="cartboxparent">
                 
                </div> -->
    <div class="main-container">
        <div class="left-sidebar-container">
            <div class="sidebar-header-container">
                <img class="sidebar-image" src="../images/laundry.jpg" alt="">
            </div>
            <div class="sidebar-content-container">
                <div class="sidebar-button-group">
                <a href="customer_dashboard.php">Dashoard</a>
                <a href="customer_profile.php">Profile</a>
                <a href="customer_profile_edit.php">Profile Edit</a>
                <a href="order_history.php">Order History</a>
                <a href="../../home/control/logout.php" name ="Logout">Logout</a>
                </div>
            </div>
        </div>
        <div class="right-content-container">
            <div class="box-wrapper">

        <div class="box">Hello - <?php echo $_SESSION['uname']; ?></div>
        <div class="box">
        <form id="" class="edit-form" action="" method="POST" enctype="multipart/form-data" onsubmit="return form_check()"> 
        <div>
         <p  id= "errorform"></p>
     </div>
            Name
            <input type="text" name="fullname" id = "f_name" value="<?php echo $customer_name; ?>" onkeyup="check_fullname()">
            <div class="perror"> 
            <p id="fullname_error"></p>
            </div>
            Age
            <input type="date" name="age" id="age" value="<?php echo "$customer_age"; ?>" onchange="check_birthday()"><br>
            <div class="perror">
            <p id="birthday_error"></p>
            </div>
            Gender
            <?php
                $isMale = "";
                $isFemale = "";
                if($customer_gender == "Male") {
                    $isMale = "checked";
                } else {
                    $isFemale = "checked";
                }
            ?>
            <input type="radio" name="gender" value="Male" id="" <?php echo $isMale; ?>> Male
            <input type="radio" name="gender" value="Female" id="" <?php echo $isFemale; ?>> Female
            <br>
            <br>
            Email
            <input type="text" id="mail" name="mail" value="<?php echo $customer_email; ?>" onkeyup="check_email()">
            <div class="perror">
            <p id="email_error"></p>
            </div>
            Phone
            <input type="text" id="phn_number" name="phone" value="<?php echo $customer_phone; ?>"onkeyup="check_phone()">
            <div class="perror">
            <p id="phone_error"></p>
            </div>
            Address
            <input type="text" id="c_address" name="address" value="<?php echo $customer_address; ?>" onkeyup="check_address()">
            <div class="perror">
            <p id="address_error"></p>
            </div>    
            <input type="submit" value="Submit" name="submitProfile">
        </form>
        </div>
        <script src="../js/update_profile.js"></script>     

</body>
</html>