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
$results= $customer_db->show_CustomerProfile("customer_info", $conobj, $_SESSION['uname']);
if($results->num_rows>0){
    while($row=$results->fetch_assoc()){
        $customer_name= $row["c_fullname"];
        $customer_username= $row["c_username"];
        $customer_email= $row["c_email"];
        $customer_phone= $row["c_number"];
        $customer_age= $row["c_birthday"];
        $customer_gender= $row["c_gender"];
        $customer_address= $row["c_address"];
    }
}

?>