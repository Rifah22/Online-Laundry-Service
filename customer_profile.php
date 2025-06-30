<?php
include("../control/customer_ProfileControl.php");
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
    <link rel="stylesheet" type="text/css" href="../css/customer_profile.css">
    <title>customer profile</title>
</head>
<body>

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
        <div class="card-title">General Information</div>
        <div class="profile-container">

        
            <div class="profile-card">
                <div class="profil-header">Name</div>
                <div class="profile-desc"><?php echo $customer_name; ?></div> 
            </div>

            <div class="profile-card">
                <div class="profil-header">User Name</div>
                <div class="profile-desc"><?php echo $customer_username; ?></div> 
            </div>


            <div class="profile-card">
                <div class="profil-header">Age</div>
                <div class="profile-desc"><?php echo $customer_age; ?></div> 
            </div>

            <div class="profile-card">
                <div class="profil-header">Gender</div>
                <div class="profile-desc"><?php echo  $customer_gender; ?></div> 
            </div>
        </div>

        <div class="card-title">Contact Information</div>
        <div class="profile-container">
            <div class="profile-card">
                <div class="profil-header">Email</div>
                <div class="profile-desc"><?php echo $customer_email; ?></div> 
            </div>

            <div class="profile-card">
                <div class="profil-header">Phone</div>
                <div class="profile-desc"><?php echo $customer_phone; ?></div> 
            </div>

            <div class="profile-card">
                <div class="profil-header">Address</div>
                <div class="profile-desc"><?php echo $customer_address; ?></div> 
            </div>
   
        </div>
</body>
</html>