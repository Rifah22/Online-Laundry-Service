<?php
// session_start();
// if(isset($_SESSION["User_name"])){
//     echo "<h5>Welcome ".$_SESSION["User_name"]."</h5>";  
// }

if(empty($_SESSION["uname"])){

    header("Location: ../View/login.php");
}

?>