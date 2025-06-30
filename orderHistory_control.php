<?php 
  if(!isset($_SESSION)) 
{ 
    session_start(); 
}
 $customer_name=$customer_username=$customer_email=$customer_phone=$customer_age=$customer_gender=$customer_address=$uname="";
include('../model/customer_db.php');
//$uname=$_SESSION['uname'];
// if(empty($_SESSION["User_name"]))
// {
//     header("Location: ../../home/view/login.php");
// }
$customer_db = new customer_db();
$conobj = $customer_db->openCon();
$results= $customer_db-> show_orderHistory($_SESSION["uname"], 'orders', $conobj);



?>