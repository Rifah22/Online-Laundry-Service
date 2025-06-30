<?php
include '../model/customer_db.php';
$customer_db = new customer_db();
$connobj=$customer_db->opencon();
$results = $customer_db->show_laundryServices($_GET['uname'], 'laundry_services', $connobj);

$items= explode(",",$results->fetch_assoc()['list']) ;
array_pop($items);






  
