<?php
//include("../control/customerSession_check.php");
//include("../control/customerCookie.php");
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/dashboard_style.css">
    <title>customer dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/dashboard_inside.css">

</head>
<body>
<!-- <div class="cartbox" id="cartboxparent">
                </div> -->
                <div class="cartbox" id="cartboxparent">
                    <div class="exit-btn" id="exit-button">X</div>
                    <h4 style="border-bottom: 1px solid #444; padding: 8px 0px;text-align: center;">Cart</h4>
                  <div class="cartbox-child" id="cartbox" class="">
                  </div>
                  <button class="checkout-btn" type="button" onclick="checkout()">checkout</button>
                </div>
                
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

               
                <div class="c-table">
                    <div class="c-table-header">Wash & Iron</div>
                    <div class="c-table-body">
                    
                        <ul>
                            <?php include '../control/laundry_servicesInfo.php'; ?>
                            <table  style="width: 600px;margin: 0 auto;">
                        <tr></tr>
                        <tr class="table-header">
                            <td>Name</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td></td>
                        </tr>
                    
                            <?php
                                foreach ($items as $item) {   
                            ?>
                                <?php $it = explode(':', $item); ?>
                            <tr >
                            <td><?php echo $it[0]; ?></td>
                            <td><?php echo $it[1]; ?></span></td>
                            <td><input type="number" value="1"  style="width: 40px;"></td>
                            <td><button id="addbtn" type="button" onclick="addToCart(this, '<?php echo $_SESSION['uname']; ?>', '<?php echo $item; ?>')">+</button></td>
                            </tr>
                            <?php }
                            ?>
                            </table>
                        </ul>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
    
        
    <script src="../js/customer_cart.js"></script>
    <script src="../js/cartBox_display.js"></script>
</body>
</html>