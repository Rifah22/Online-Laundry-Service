<?php   
session_start();
include_once '../model/login_db.php';
include_once '../view/forgot_password.php';
// forgot password
$forgotemail_Error = "";
if(isset($_POST["submitforgot"])){
    if(empty($_POST["forgot_email"])){
        $forgotemail_Error = "*Email is required";   
    }
    else if(isset($_POST["forgot_email"])){
        $forgot_email = $_POST["forgot_email"];
        $customer_db = new login_cls();
        $conobj = $customer_db->opencon();
        $results = $customer_db->check_forgot($forgot_email,"login_info", $conobj);
        if($results->num_rows>0){
           $_SESSION["forgot_email"] = $forgot_email;
            header("Location: ../view/verification_code.php");
        }
        else{
            $forgotemail_Error = "*Email not found";
        }
    }
}


?>