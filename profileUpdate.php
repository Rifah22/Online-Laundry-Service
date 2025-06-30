<?php
include_once '../model/customer_db.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
 $fullname= $age=$gender=$email=$phone=$address="";
if(isset($_POST['submitProfile'])){
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];

    if (isset($_POST["gender"])) {
        $gender = $_POST["gender"];
    }
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $login_db = new customer_db();
    $conobj = $login_db->opencon();
    $results = $login_db->update_profile($_SESSION["uname"], $fullname, $age,$gender,$email,$phone,$address,"customer_info" ,$conobj);

}





?>