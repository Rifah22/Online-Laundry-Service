<?php
include_once("../view/login.php");
include_once("../model/login_db.php");

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_POST["register"])) {
    header("Location: ../../home/view/registrationRole.php");
}


$HasError1 = 0;
$usernameError = "";
$userPass_Error = "";
$userNotfound = "";

if (isset($_POST["submitlogin"])) {
        if (empty($_POST["uname"])) {
            $usernameError = "Username can't be empty";
            $HasError1 = 1;
        }
        if (empty($_POST["password"])) {
            $userPass_Error = "Password can't be empty";
            $HasError1 = 1;
        }
        if ($HasError1 == 0) {
            $username = $_POST["uname"];
            $password = $_POST["password"];
            $customer_db = new login_cls();
            $conobj = $customer_db->opencon();
            $results = $customer_db->check_login($username, $password, "login_info", $conobj);
            if ($results->num_rows > 0) {
                echo "logged in";
                $_SESSION["role"] = '';
                while ($c_row = $results->fetch_assoc()) {
                    $_SESSION["uname"] = $c_row["login_username"];
                    $_SESSION["role"] = $c_row["login_role"];
                }
                switch ($_SESSION["role"]) {
                    case 'customer':
                        header("Location: ../../customer/view/customer_dashboard.php");
                        break;
                        // case 'admin':

                        //     break;
                        // case 'delivery_man':

                        //     break;
                        // case 'laundry_man':

                        //     break;

                    default:
                        header('Location: ../view/login.php');
                        session_destroy();
                        break;
                }
        } else {
            $userNotfound = "User not found";
        }
    }
}



//login with json

//customer login
// $customer_data = file_get_contents('../data/customer_data.json');
// $decoded_data = json_decode($customer_data);

// if (isset($_POST["submitlogin"])) {
//     $selected_role = $_POST['role'];
//     if ($selected_role == "customer") {
//         foreach ($decoded_data as  $key => $udata) {
//             if (($udata->User_name == $_POST["uname"] || $udata->Email == $_POST["uname"]) && $udata->Password == $_POST["password"]) {

//                 $_SESSION["User_name"] = $_POST["uname"];
//                 $_SESSION["email"] = $_POST["mail"];
//                 $_SESSION["Password"] = $_POST["password"];
//                 if (!empty($_SESSION["User_name"])) {
//                     header("Location: ../View/customer_dashboard.php");
//                 }
//             }
//             if (empty($_REQUEST["uname"]) || (empty($_REQUEST['password']))) {
//                 $usernameError = "Enter your user name and password !";
//             } else {

//                 $HasError1 = 1;
//             }

//         }
        
// if ($HasError1 == 1) {
//     $userPass_Error = "Your username or password is incorrect !";
      
//     } 
// }
// }

// //Admin Log in
//     $admin_data = file_get_contents('../../admin/data/data.json');
// $decoded_admin_data = json_decode($admin_data);

// if (isset($_POST["submitlogin"])) {
//     $selected_role = $_POST['role'];
//     if ($selected_role == "admin") {
//         foreach ($decoded_admin_data as  $key => $udata) {
//             if (($udata->User_name == $_POST["uname"] || $udata->Email == $_POST["uname"]) && $udata->Password == $_POST["password"]) {

//                 $_SESSION["User_name"] = $_POST["uname"];
//                 $_SESSION["email"] = $_POST["mail"];
//                 $_SESSION["Password"] = $_POST["password"];
//                 if (!empty($_SESSION["User_name"])) {
//                     header("Location: ../../admin/View/adminDashboard.php");
//                 }
//             }
//             if (empty($_REQUEST["uname"]) || (empty($_REQUEST['password']))) {
//                 $usernameError = "Enter your user name and password !";
//             } else {

//                 $HasError1 = 1;
//             }
//         }
        
// if ($HasError1 == 1) {
//     $userPass_Error = "Your username or password is incorrect !";
      
//     } 
// }
// }



// //Rider login
// $dm_data = file_get_contents('../../deliveryman/data/dm_data.json');
// $decoded_data = json_decode($dm_data);

// if (isset($_POST["submitlogin"])) {
//     $selected_role = $_POST['role'];
//     if ($selected_role == "rider") {
//         foreach ($decoded_data as  $key => $udata) {
//             if (($udata->User_name == $_POST["uname"]) && $udata->Password == $_POST["password"]) {
//                 $_SESSION["dmUser_name"] = $_POST["uname"];
//                 $_SESSION["dmPassword"] = $_POST["password"];
//                 if (!empty($_SESSION["dmUser_name"])) {
//                     header("Location: ../../deliveryman/view/dm_dashboard.php");
//                 }
//             }
//             if (empty($_REQUEST["uname"]) || (empty($_REQUEST['password']))) {
//                 $usernameError = "Enter your user name and password !";
//             } else {

//                 $hasError = 1;
//             }
//         }
//         if ($hasError == 1) {
//             $userPass_Error = "Your username or password is incorrect !";
//         }
//     }
// }



// //laundry login
// $lm_data = file_get_contents('../../laundryman/Data/laundry_data.json');
// $ldd_data = json_decode($lm_data);

// if (isset($_POST["submitlogin"])) {
//     $selected_role = $_POST['role'];
//     if ($selected_role == "laundry") {
//         foreach ($ldd_data as  $key => $udata) {
//             if (($udata->Username == $_POST["uname"]) && $udata->Password == $_POST["password"]) {
//                 //$_SESSION["dmUser_name"] = $_POST["uname"];
//                // $_SESSION["dmPassword"] = $_POST["password"];
//                 header("Location: ../../laundryman/view/laundryman_dashboard.php");
//             }
//             if (empty($_REQUEST["uname"]) || (empty($_REQUEST['password']))) {
//                 $usernameError = "Enter your user name and password !";
//             } else {

//                 $hasError = 1;
//             }
//         }
//         if ($hasError == 1) {
//             $userPass_Error = "Your username or password is incorrect !";
//         }
//     }
// }

?>