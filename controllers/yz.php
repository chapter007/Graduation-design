<?php
    $user=  htmlspecialchars($_POST["email"]);
    $password=  htmlspecialchars($_POST["password"]);
    if($password=='root'&&$user=='root'){
       echo "<script> window.location.href='../views/home/index.php';</script>";
    }  else {
        echo "<script>"
        . "alert('login wrong');"
                . "window.location.href='../index.php';"
        . "</script>";
    }
    




