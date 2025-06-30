<?php

$item = array("name"=>$_GET['item'], "qty"=>$_GET['qty']);
$cart = [];

    if(isset($_COOKIE['cart'])) {
        $cart = json_decode($_COOKIE['cart'], true);
        array_push($cart, $item);
        
        setcookie("cart", json_encode($cart), time() + (86400), "/");
    } else {
        
    array_push($cart, $item);
        setcookie("cart", json_encode($cart), time() + (86400), "/");
    }
  
   
    