<?php
$Error_fname = "";
$Error_uname = "";
$Error_bdate = "";
$Error_gender = "";
$Error_email = "";
$Error_pnumber = "";
$Error_nid = "";
$Error_photo = "";
$Error_service = "";
$Error_pass = "";
$Error_passcmp = "";
$customer_gender = "";
$hasError = 0;

if (isset($_REQUEST["submitReg"])) {
    $laundryman_fullname = $_REQUEST['fname'];
    $laundryman_username = $_REQUEST['uname'];
    $laundryman_birthdate = $_REQUEST['bdate'];
    $laundryman_email = $_REQUEST['email'];
    $laundryman_number = $_REQUEST["pnumber"];
    $laundryman_password = $_REQUEST['pass'];
    $laundryman_confirmpassword = $_REQUEST['confirm_pass'];

    if (empty($_REQUEST['fname']) || strlen($_REQUEST['fname']) < 3 || preg_match('~[0-9]+~', $_REQUEST['fname'])) {
        $Error_fname = "Please enter a valid name";
        $hasError = 1;
    } else {
        $laundryman_fullname = $_REQUEST['fname'];
    }

    if (!preg_match('/^[a-zA-Z0-9]{3,}$/', $laundryman_username)) {
        $Error_uname = "Username allows only alphanumeric values & must be longer than 2 digits";
        $hasError = 1;
    } else {
        $laundryman_username = $_REQUEST['uname'];
    }
    if (empty($laundryman_birthdate)) {
        $Error_bdate = "Please enter your date of birth";
        $hasError = 1;
    } else {
        $laundryman_birthdate = $_REQUEST['bdate'];
    }
    if (isset($_POST["gender"])) {
        $laundryman_gender = $_POST["gender"];
    } else {
        $Error_gender = "Please select gender.";
        $hasError = 1;
    }
    if (empty($laundryman_email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $laundryman_email)) {
        $Error_email = "Invalid email Address !";
        $hasError = 1;
    } else {
        $laundryman_email = $_REQUEST['email'];
    }
    if (!preg_match('/^[0-9]{11}+$/', $laundryman_number)) {
        $Error_pnumber = "Enter valid phone number !";
        $hasError = 1;
    } else {
        $laundryman_number = $_REQUEST["pnumber"];
    }
    // if(move_uploaded_file($_FILES["lmfile"]["tmp_name"],"../upload/".$_FILES["lmfile"]["name"])){
        
    // }
    // else{
    //     $Error_file= "File not uploaded";
    //     $hasError = 1;
    // }
    $laundryman_service = "";
    if (isset($_POST["washing"]) && isset($_POST["drying"]) && isset($_POST["ironing"])) {
        $laundryman_service = $_POST["washing"] . " , " . $_POST["drying"] . " , " . $_POST["ironing"];
    } else if (isset($_POST["washing"]) && isset($_POST["drying"])) {
        $laundryman_service = $_POST["washing"] . " , " . $_POST["drying"];
    } else if (isset($_POST["drying"]) && isset($_POST["ironing"])) {

        $laundryman_service = $_POST["drying"] . " , " . $_POST["ironing"];
    } else if (isset($_POST["washing"]) && isset($_POST["ironing"])) {
        $laundryman_service = $_POST["washing"] . " , " . $_POST["ironing"];
    } else if (isset($_POST["washing"])) {
        $laundryman_service = $_POST["washing"];
    } else if (isset($_POST["drying"])) {
        $laundryman_service = $_POST["drying"];
    } else if (isset($_POST["ironing"])) {
        $laundryman_service = $_POST["ironing"];
    } else {
        $Error_sevice = "Please select service.";
        $hasError = 1;
    }
    $uppercase = preg_match('@[A-Z]@', $laundryman_password);
    if (!$uppercase || strlen($laundryman_password) < 8) {
        $Error_pass = 'Password should be at least 8 characters';
        $hasError = 1;
    } else {
        $laundryman_password = $_REQUEST['pass'];
    }
    if ($laundryman_password != $laundryman_confirmpassword) {
        $Error_passcmp = "Incorrect confirm password !";
        $hasError = 1;
    } else {
        $laundryman_confirmpassword = $_REQUEST['confirm_pass'];
    }
    if ($hasError == 0) {
        $laundryman_data = array(
            'Full Name' =>$laundryman_fullname,
            'Username'  =>$laundryman_username,
            'Birthdate' =>$laundryman_birthdate,
            'gender'   =>$laundryman_gender,
            'Email'    =>$laundryman_email,
            'Number'   =>$laundryman_number,
            'service'  =>$laundryman_service,
            'Nid File' =>$_FILES["myfile"]["name"],
            'Password'  =>$laundryman_password,
            'confirm pass' =>$laundryman_confirmpassword

        );
        $existing_Data = file_get_contents('../Data/launder_data.json');
        $laundryman_JsonData = json_decode($existing_Data);

        $laundryman_JsonData[] = $laundryman_data;
        $jsondata = json_encode($laundryman_JsonData, JSON_PRETTY_PRINT);
        if (file_put_contents("../Data/laundry_data.json", $jsondata)) {

            echo "<br>Registration successful !";
        }
    } else {
        echo "Registration failed !";
    }
}
