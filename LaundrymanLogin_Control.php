<?php
$HasError=0;
$usernameError="";
$userPass_Error="";
$laundryman_data = file_get_contents('../Data/laundry_data.json');
$laundryman_data = json_decode($laundryman_data);

if (isset($_POST["submitlogin"])) {
    foreach ($laundryman_data as  $key => $udata) {
        if (($udata->Username == $_POST["uname"] )&& $udata->Password == $_POST["pass"]) {

            $_SESSION["User_name"] = $_POST["uname"];
            $_SESSION["Password"] = $_POST["pass"];
             if (!empty($_SESSION["User_name"]))
             {
                header("Location: ../View/laundryman_dashboard.php");
             }
        }
        if(empty($_REQUEST["uname"])||(empty($_REQUEST['pass'])))
            {
                $usernameError= "Enter your user name and password !";
            }
            else{

                $HasError=1;
            }   
        }
    if($HasError==1){
        $userPass_Error= "Your username or password is incorrect !";
    }
}
?>