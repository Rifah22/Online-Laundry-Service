<?php
    include '../model/customer_db.php';
    $customer_db = new customer_db();
    $connobj=$customer_db->opencon();

    $results = $customer_db->show_laundryServicesAll('laundry_services', $connobj);


?>