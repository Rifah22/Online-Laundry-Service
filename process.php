<?php
include_once('../model/customer_db.php');
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

// if(isset($_SESSION["User_name"]))
// {
//     header("Location: ../View/customer_dashboard.php");
// }

$Error_f_name = "";
$Error_username = "";
$Error_email = "";
$Error_number = "";
$Error_date="";
$Error_pass = "";
$Error_pass_cmp = "";
$Error_gender = "";
$Error_address ="";
$customer_gender = "";
$hasError = 0;

//customer Registration php validation
if (isset($_POST["submitReg"])) {
    $full_name = $_POST['f_name'];
    $customer_username = $_POST['u_name'];
    $customer_email = $_POST['mail'];
    $customer_number = $_POST["phn_number"];
    $customer_age=$_POST['age'];
    $customer_password = $_POST['pass'];
    $customer_confirm_password = $_POST['confirm_pass'];
    $customer_address = $_POST['c_address'];

    if (empty($_POST['f_name']) || strlen($_POST['f_name']) < 4 || preg_match('~[0-9]+~', $_POST['f_name'])) {
        $Error_f_name = "Numeric value is not allowed !";
        $hasError = 1;
    } else {
        $full_name = $_POST['f_name'];
    }
    if (!preg_match("/^[a-zA-Z ]{3,20}$/", $customer_username)) {
        $Error_username = "username allows characters numbers ";
        $hasError = 1;
    } else {
        $customer_username = $_POST['u_name'];
    }

    if (empty($customer_email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix" ,$customer_email)) {
        $Error_email = "Invalid email Address !";
        $hasError = 1;
    } else {
        $customer_email = $_POST['mail'];
    }
    if (!preg_match("/^[0-9]{11}+$/", $customer_number)) {
        $Error_number = "Enter valid phone number !";
        $hasError = 1;
    } else {
        $customer_number = $_POST["phn_number"];
    }
    if(empty($customer_age)){
        $Error_date="Please enter your date of birth";
        $hasError = 1;
    }
    else{
        $customer_age=$_POST['age'];
    }

    $uppercase = preg_match('@[A-Z]@', $customer_password);
    $lowercase = preg_match('@[a-z]@', $customer_password);
    $number    = preg_match('@[0-9]@', $customer_password);
    $specialChars = preg_match('@[^\w]@', $customer_password);
    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($customer_password) < 8) {
        $Error_pass = 'Require 8 characters one upper & lower case letter, one number, one special character!';
        $hasError = 1;
    } else {
        $customer_password = $_POST['pass'];
    }
    if (empty($customer_confirm_password)) {
        $Error_pass_cmp = "Enter your confirm password";
        $hasError = 1;
    } else if ($customer_password != $customer_confirm_password) {
        $Error_pass_cmp = "Incorrect confirm password !";
        $hasError = 1;
    } else {
        $customer_confirm_password = $_POST['confirm_pass'];
    }
    if (isset($_POST["gender"])) {
        $customer_gender = $_POST["gender"];
    } else {
        $Error_gender = "Please select your gender !";
        $hasError = 1;
    }
    if(empty($customer_address)){
        $Error_address = "please fill-up your address !";
        $hasError = 1;
    }
    else{
        $customer_address = $_POST['c_address'];
    }

 if ($hasError == 0) {
    //check if username already exists
    $customer_db = new customer_db();
    $connobj=$customer_db->opencon();
    $results = $customer_db->check_username($customer_username, 'customer_info', $connobj);
    if ($results->num_rows>0) {
         echo "Username already exists !";
            $hasError = 1;
    } else {
        if($hasError==0){
            $customer_db->InsertCustomer_data($full_name, $customer_username, $customer_email, $customer_number, $customer_age, 
            $customer_password, $customer_gender, $customer_address, 'customer','customer_info',$connobj);
            $customer_db->InsertLogin_data($customer_username, $customer_email, $customer_password, 'customer', $connobj);
            header("Location: ../../home/view/login.php");
            $customer_db->closecon($connobj);
            
        }else{
           
            echo "Error occured !".$conn->err;
    }

 }
           
}
   
}

    // if ($hasError == 0) {
    //     $customer_data = array(
    //         'Full_name' => $full_name,
    //         'User_name' => $customer_username,
    //         'Email' => $customer_email,
    //         'Phone_number' => $customer_number,
    //         'Age' => $customer_age,
    //         'Password' => $customer_password,
    //         'Confrim_password' => $Customer_confirm_password,
    //         'Gender' => $customer_gender
    //     );

    //     //json work
    //     $existing_Data = file_get_contents('../data/customer_data.json');
    //     $customer_JsonData = json_decode($existing_Data);

    //     $customer_JsonData[] = $customer_data;
    //     $jsondata = json_encode($customer_JsonData, JSON_PRETTY_PRINT);
    //     if (file_put_contents("../data/customer_data.json", $jsondata)) {

    //         echo "<br>Registration successful !";
    //     }
    // } else {
    //     echo "Registration failed !";
    // }
// else
// {
//     header("Location: ../View/login.php");
// }
