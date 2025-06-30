<?php
//include("../control/customerSession_check.php");
//include("../control/customerCookie.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/dashboard_style.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard_inside.css">
    <link rel="stylesheet" type="text/css" href="../css/jq_style.css">
    <script src="../lib/jquery.min.js"></script>
    <title>customer dashoard</title>
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
                <!-- <a href="">Checkout</a> -->
                <a href="../../home/control/logout.php" name ="Logout">Logout</a>
              
                </div>
   
            </div>
        </div>
        <div class="right-content-container">
            <div id="arrow">WELCOME!!</div>
            <div class="box-wrapper">

                <div class="box">Hello - <?php echo $_SESSION['uname']; ?></div>
                <div class="box">
                <div class="block-container">
                   <?php 
                   include '../control/dashboard_process.php';    
                           foreach ($results as $row) {
                       ?>
                       <div class="lbox" onclick="location.href='show_laundry.php?uname=<?php echo $row["username"]; ?>&Phone_Number=<?php echo $row["l_phone"]; ?>&laundry_email=<?php echo $row["l_email"]; ?>&laundry_title=<?php echo $row["l_title"]; ?> '">
                           <img class="box-image" src="<?php echo $row["l_image"]; ?>" alt="" width="300px" height="150px" >
                           <h4><?php echo $row["l_title"]; ?></h4>
                           <p><?php echo $row["l_description"]; ?></p>
                       </div>
   
                       <?php }
                   ?>
                      
                   </div>
                    <!-- <button type="button" onclick="checkout()">checkout</button>
                    <div id="cartbox" class="cartbox"></div> -->
               </div>
           </div>
          
                </div>    
            </div>
        </div>
    </div>


    <script src="../js/customer_cart.js"></script>
    <script src="../js/jq.js"></script>

</body>
</html>