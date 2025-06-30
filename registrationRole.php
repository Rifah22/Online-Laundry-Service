<?php

    include("../control/registrationRoleProcess.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/registrationRole.css">
    <title>Registration Role</title>
</head>

<body>
    <div class="center">
    <h1>CHOOSE THE ROLE YOU WANT TO GET REGISTERED IN </h1>
<form action="" method="POST">
        
        <input type="submit" class="button" name="c_role" value="Customer"> 
        <input type="submit" class="button" name="r_role" value="Rider">  
        <input type="submit" class="button" name="l_role" value="Laundry">  
        <input type="submit" class="button" name="a_role" value="Admin"> 
        
</form>
</div>
</body>
</html>