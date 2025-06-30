<?php
session_start();

if(session_destroy())
{
    header("Location: ../../customer/View/login.php");
}
?>