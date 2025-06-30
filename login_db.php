<?php
class login_cls
{
    //connection function
    function opencon(){
        $DBHostname="localhost";
        $DBUsername="root";
        $DBPass="";
        $DBName="laundry_service";
    
    $conn=new mysqli($DBHostname, $DBUsername, $DBPass, $DBName);
    if($conn->connect_error)
    {
        echo "Unable to create connection object".$conn->connect_error;
    }
    return $conn;
}
    function check_login($login_username, $login_password, $table_name, $conn){
    $sqlstr="SELECT * FROM $table_name WHERE login_username='$login_username' AND login_password='$login_password'";
    return $conn->query($sqlstr);
}

    function check_forgot($forgot_email, $table_name, $conobj){
    $sqlstr="SELECT * FROM $table_name WHERE login_email='$forgot_email'";
    return $conobj->query($sqlstr);
}

    function update_password($forgot_email, $new_password, $table_name, $conobj){
    $sqlstr="UPDATE $table_name SET login_password='$new_password' WHERE login_email='$forgot_email'";
    return $conobj->query($sqlstr);
}

    function reset_password($forgot_email, $new_password, $table_name, $conobj){
    $sqlstr="UPDATE $table_name SET c_pass='$new_password' WHERE c_email ='$forgot_email'";
    return $conobj->query($sqlstr);
    }
    
}
?>