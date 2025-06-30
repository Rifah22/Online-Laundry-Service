<?php
    if (isset($_POST["submitSignIn"])) {
        header("Location: ../../home/view/login.php");
    }
    if(isset($_POST["submitSignUp"])){
        header("Location: ../view/registrationRole.php");
    }
?>