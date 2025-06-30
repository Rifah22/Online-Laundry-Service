<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}








$dmuser_cookie=$_SESSION["dmUser_name"];
$dmcookie_value='gg';



setcookie($dmuser_cookie,$dmcookie_value, time()+36000);





if(!empty($dmuser_cookie))
{
    if(isset($_COOKIE[$dmuser_cookie])){
        echo "<div align=right><h4> Welcome Back </h4></div>";
    }
    else{
        echo "<div align=right><h4>New joining!</h4></div>";
    }
}else{
    echo "Session empty !";
}


?>