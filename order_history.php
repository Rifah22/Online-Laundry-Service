<?php
include '../control/orderHistory_control.php'
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
    <title>order history</title>


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
                <div class="box">
                <table >
                    <tr class="c-table-header">
                        <td>Date</td>
                        <td>Title</td>
                        <td>Phone</td>
                        <td>Email</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                    </tr>
                    <?php
                if($results->num_rows>0){
                    while($row=$results->fetch_assoc()){
                    
                      $items =  json_decode($row["item"], true);
                      $date = $row["date"];
                      $l_title = $row["l_title"];
                      $l_phone = $row["l_phone"];
                      $l_email = $row["l_email"];
                
                    $str = $items[0]['name'];
                     $splitstr= explode(":",$str);
                     $item_name = $splitstr[0];
                     $item_price= $splitstr[1];
                     $item_qty = $items[0]['qty'];
                ?>
                    <tr class="c-table-tr">
                        <td><?php echo $date; ?></td>
                        <td><?php echo $l_title; ?></td>
                        <td><?php echo $l_phone; ?></td>
                        <td><?php echo $l_email; ?></td>
                        <td><?php echo $item_name; ?></td>
                        <td><?php echo $item_price; ?></td>
                        <td><?php echo $item_qty; ?></td>
                    </tr>

                    <?php
                    }
                }
                
                ?>
                </table>
               </div>
            </div>
        </div>
    </div>
</body>
</html>