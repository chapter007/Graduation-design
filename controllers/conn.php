<?php
            $conn = mysql_connect("localhost","root","root");

            if(!$conn){
	echo "数据库打开失败";
	return;
            }
            mysql_query("set names UTF8");
            mysql_query("use student_info_manage");