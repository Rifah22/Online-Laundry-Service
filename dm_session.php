<?php
session_start();
if(isset($_SESSION["dmUser_name"])){
    echo "<div align = right><h5>Profile Name :  ".$_SESSION["dmUser_name"]."</h5></div>";  
}

if(empty($_SESSION["dmUser_name"])){

    header("Location: ../View/login.php");
}
?>