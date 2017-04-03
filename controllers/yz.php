<?php
	include 'conn.php';
	session_start();
    $user=  htmlspecialchars($_POST["s_id"]);
    $password=  htmlspecialchars($_POST["password"]);
	//从数据库里查询用户是否存在
	$_SESSION['s_id']=$user;
	$sql="select * from s_info where id= $user and password=$password";
	$result=mysql_query($sql);
	if($result){
		echo "<script> window.location.href='../views/home/index.php';</script>";
	}  else {
        echo "<script>"
        . "alert('login wrong');"
                . "window.location.href='../index.php';"
        . "</script>";
    }
    




