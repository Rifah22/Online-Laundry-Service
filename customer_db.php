<?php

class customer_db
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
//query function for customer registration
    function InsertCustomer_data($c_fullname, $c_username, $c_email	, $c_number, $c_birthday, $c_pass, $c_gender, $c_address, $c_role, $tablename, $conn){
    $sqlstr="INSERT INTO $tablename(c_fullname, c_username, c_email, c_number, c_birthday, c_pass, c_gender, c_address, c_role) values ('$c_fullname', '$c_username', '$c_email', '$c_number', '$c_birthday', '$c_pass', '$c_gender', '$c_address', '$c_role')";
    return $conn->query($sqlstr);
}
//query function for customer login
function InsertLogin_data($login_username, $login_email, $login_password, $login_role, $conn){
    $sqlstr="INSERT INTO login_info (login_username, login_email, login_password, login_role) values ('$login_username', '$login_email', '$login_password', '$login_role')";
    return $conn->query($sqlstr);
}

//check if username already exists
function check_username($customer_username, $tablename, $conn){
    $sqlstr="SELECT c_username FROM $tablename WHERE c_username='$customer_username'";
    return $conn->query($sqlstr);

}
//show customer profile
function show_CustomerProfile($tablename, $conn, $customer_username){
    $sqlstr="SELECT * FROM $tablename where c_username='$customer_username'";
    return $conn->query($sqlstr);
}

//laundry services table query
function show_laundryServices($username, $tablename, $conn){
    $sqlstr="SELECT * FROM $tablename where username='$username'";
    return $conn->query($sqlstr);
}

//laundry services table query
function show_laundryServicesAll($tablename, $conn){
    $sqlstr="SELECT * FROM $tablename";
    return $conn->query($sqlstr);
}

//insert laundry services into order query
function insert_order($username,$tablename, $item, $l_title,$l_email,$l_phone, $conn){
    $sqlstr="INSERT INTO $tablename (c_username, item, l_title, l_email, l_phone) values ('$username', '$item', '$l_title', '$l_email', '$l_phone')";
    return $conn->query($sqlstr);
}

//show order history query
function show_orderHistory($username, $tablename,$conn){
    $sqlstr="SELECT * FROM $tablename where c_username='$username'";
    return $conn->query($sqlstr);
}


function update_profile($username, $fullname, $age,$gender,$email,$phone,$address,$table_name, $conobj){
    $sqlstr="UPDATE $table_name SET c_fullname='$fullname',c_email='$email',c_number='$phone',c_birthday='$age',c_gender='$gender',c_address='$address' WHERE c_username='$username';";
    return $conobj->query($sqlstr);
}
//close function
function closecon($conn){
    $conn->close();
}

}
?>