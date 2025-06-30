<?php
if (!isset($_SESSION)){
    session_start();
}
include_once '../model/login_db.php';
include_once '../view/set_newpass.php';
$passreset_Error = "";
//reset password
if(isset($_POST["submit_newpass"])){
    $newpass = $_POST["new_pass"];
    if(empty($_POST["new_pass"]) || empty($_POST["confirm_pass"])){
        $passreset_Error = "*password is required";   
    }
    else if($newpass<8){
        $passreset_Error = "*password must be at least 8 characters";
    }
    else if(isset($_POST["new_pass"]) && isset($_POST["confirm_pass"])){
        $new_password = $_POST["new_pass"];
        $confirm_password = $_POST["confirm_pass"];
        if($new_password == $confirm_password){
            $login_db = new login_cls();
            $conobj = $login_db->opencon();
            $results = $login_db->update_password($_SESSION["forgot_email"], $new_password, "login_info" ,$conobj);
            $login_db->reset_password($_SESSION["forgot_email"], $new_password, "customer_info" ,$conobj);
            if($results){
                header("Location: ../view/login.php");
            }
            else{
                $passreset_Error = "*Password not reset";
            }
        }
        else{
            $passreset_Error = "*password did not match";
        }  
    }
}
?>