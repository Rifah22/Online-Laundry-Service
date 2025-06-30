<!-- <?php
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

</head>
<body> 
        <div class="main-content">
            <div class="left-content">
                <br>
                <br>
                
                <div class="cartbox" id="cartboxparent">
                    <style>
                        .exit-btn {
                            background-color: #ff0000;
                            color: #ffffff;
                            border: none;
                            border-radius: 4px;
                            padding: 5px;
                            cursor: pointer;
                            width: 16px;
                            height: 16px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            position: absolute;
                            right: 8px;
                        }
                    </style>
                    <div class="exit-btn" id="exit-button">X</div>
                    <h4 style="border-bottom: 1px solid #444; padding: 8px 0px;text-align: center;">Cart</h4>

                  <div class="cartbox-child" id="cartbox" class="">
                  
                  </div>
                  
                  <style>
                    .checkout-btn {
                        position: absolute;
                        right: 0;
                        bottom: 0;
                        margin:12px;
                    }
                  </style>
                  <button class="checkout-btn" type="button" onclick="checkout()">checkout</button>
                </div>
               
            </div>
           
            <div class="right-content">
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



















        
        <script src="../js/customer_cart.js"></script>

        <script>
          
            var exitbtn = document.getElementById('exit-button');
            var addbtn = document.getElementById('addbtn');
            exitbtn.addEventListener('click', function() {
                document.getElementById('cartboxparent').style.display = 'none';
            });

            addbtn.addEventListener('click', function() {
                document.getElementById('cartboxparent').style.display = 'block';
            });
             
        </script>
</body>
</html> -->