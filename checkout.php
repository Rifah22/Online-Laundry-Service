<?php
if (!isset($_SESSION)) {
    session_start();
}
include '../model/customer_db.php';
$customer_db = new customer_db();
$connobj=$customer_db->opencon();

$results = $customer_db->insert_order($_SESSION["uname"], 'orders', $_COOKIE['cart'], $_GET['laundry_title'], $_GET['laundry_email'], $_GET['Phone_Number'], $connobj);
    setcookie("cart", "", time() + (86400), "/");

?>