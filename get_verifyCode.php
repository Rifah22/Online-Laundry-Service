<?php
// verification code
include_once '../view/verification_code.php';
$verification_Error = "";
if(isset($_POST["submitverification"])){
    if(empty($_POST["verifiy_code"])){
        $verification_Error = "*Verification code is required";   
    }
    else if(isset($_POST["verifiy_code"])){
        $verification = $_POST["verifiy_code"];
        if($verification == "2022"){
            header("Location: ../view/set_newpass.php");
        }
        else{
            $verification_Error = "*Verification code is incorrect";
        }  
    }
}
?>
