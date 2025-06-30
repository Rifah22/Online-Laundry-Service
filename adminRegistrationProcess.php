<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

if(isset($_SESSION["User_name"]))
{
    header("Location: ../View/adminDashboard.php");
}
$Error_f_name = "";
$Error_username = "";
$Error_email = "";
$Error_number = "";
$Error_date="";
$Error_ref="";
$Error_pass = "";
$Error_pass_cmp = "";
$Error_gender = "";
$admin_gender = "";
$hasError = 0;

//admin Registration php validation
if (isset($_REQUEST["submitReg"])) {
    $full_name = $_REQUEST['f_name'];
    $admin_username = $_REQUEST['u_name'];
    $admin_email = $_REQUEST['mail'];
    $admin_number = $_REQUEST["phn_number"];
    $admin_age=$_REQUEST['age'];
    $admin_ref=$_REQUEST['ref'];
    $admin_password = $_REQUEST['pass'];
    $admin_confirm_password = $_REQUEST['confirm_pass'];

    if (empty($_REQUEST['f_name']) || strlen($_REQUEST['f_name']) < 4 || preg_match('~[0-9]+~', $_REQUEST['f_name'])) {
        $Error_f_name = "Please enter a valid name. numeric value is not allowed !";
        $hasError = 1;
    } else {
        $full_name = $_REQUEST['f_name'];
    }
    if (!preg_match("/^[a-zA-Z0-9]{3,}$/", $admin_username)) {
        $Error_username = "username allows only alphanumeric & longer than 2 chars !";
        $hasError = 1;
    } else {
        $admin_username = $_REQUEST['u_name'];
    }

    if (empty($admin_email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix" ,$admin_email)) {
        $Error_email = "Invalid email Address !";
        $hasError = 1;
    } else {
        $admin_email = $_REQUEST['mail'];
    }
    if (!preg_match("/^[0-9]{11}+$/", $admin_number)) {
        $Error_number = "Enter valid phone number !";
        $hasError = 1;
    } else {
        $admin_number = $_REQUEST["phn_number"];
    }
    if(empty($admin_age)){
        $Error_date="Please enter your date of birth";
        $hasError = 1;
    }
    else{
        $admin_age=$_REQUEST['age'];
    }
    if(empty($admin_ref) || strlen($admin_ref)<5){
        $Error_ref = "Please provide a valid reference number Provided in your secret form";
    }
    else{
        $admin_ref=$_REQUEST['ref'];
    }

    $uppercase = preg_match('@[A-Z]@', $admin_password);
    $lowercase = preg_match('@[a-z]@', $admin_password);
    $number    = preg_match('@[0-9]@', $admin_password);
    $specialChars = preg_match('@[^\w]@', $admin_password);
    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($admin_password) < 8) {
        $Error_pass = 'Password should be at least 8 characters in length and should include at least one upper & lower case letter, one number, and one special character!';
        $hasError = 1;
    } else {
        $admin_password = $_REQUEST['pass'];
    }
    if (empty($admin_confirm_password)) {
        $Error_pass_cmp = "Enter your confirm password";
        $hasError = 1;
    } else if ($admin_password != $admin_confirm_password) {
        $Error_pass_cmp = "Incorrect confirm password !";
        $hasError = 1;
    } else {
        $admin_confirm_password = $_REQUEST['confirm_pass'];
    }
    if (isset($_POST["gender"])) {
        $admin_gender = $_POST["gender"];
    } else {
        $Error_gender = "Please select your gender !";
        $hasError = 1;
    }

    if ($hasError == 0) {
        $admin_data = array(
            'Full_name' => $full_name,
            'User_name' => $admin_username,
            'Email' => $admin_email,
            'Phone_number' => $admin_number,
            'Age' => $admin_age,
            'Password' => $admin_password,
            'Confrim_password' => $admin_confirm_password,
            'Gender' => $admin_gender
        );

        //json work
        $existing_Data = file_get_contents('../data/data.json');
        $admin_JsonData = json_decode($existing_Data);

        $admin_JsonData[] = $admin_data;
        $jsondata = json_encode($admin_JsonData, JSON_PRETTY_PRINT);
        if (file_put_contents("../data/data.json", $jsondata)) {

            echo "<br>Registration successful !";
        }
    } else {
        echo "Registration failed !";
    }
}
// else
// {
//     header("Location: ../View/login.php");
// }
?>