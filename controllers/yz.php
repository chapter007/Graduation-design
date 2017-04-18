<?php
	include 'conn.php';
	session_start();
    $user=  htmlspecialchars($_POST["s_id"]);
    $password=  htmlspecialchars($_POST["password"]);
	$submit=  htmlspecialchars($_POST["submit"]);
	//可以获取到submit是否为老师
	//从数据库里查询用户是否存在
	$_SESSION['s_id']=$user;
	if($submit=='教师登录'){
		$sql="select * from t_info where id= $user and password='$password'";
	}else{
		$sql="select * from s_info where id= $user and password='$password'";
	}
	//echo $sql;break;
	$result=mysql_query($sql);
	
	if($result){
		if($submit=='教师登录'){
			echo "<script> window.location.href='../views/admin/index.php';</script>";
		}else{
			echo "<script> window.location.href='../views/student/index.php';</script>";
		}
		
	}  else {
        echo "<script>"
        . "alert('login wrong');"
                . "window.location.href='../index.php';"
        . "</script>";
    }
    




