<?php
@header('Content-type: text/html;charset=UTF-8');
//得到的是文件所在层目录名
session_start();
define('PHPROOT_PATH',str_replace('\\', '/', dirname(__FILE__)));
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE );
	$config = array(
		'url_model'=>'1',
		'control' =>'home',
		'action' => 'login'
	);
        //echo PHPROOT_PATH;
	require_once PHPROOT_PATH.'/etc/config.inc.php';
	require_once PHPROOT_PATH.'/include/system_init.php';
	if(!is_writable(PHPSESSION_PATH)){
		exit(PHPSESSION_PATH.'不可写,请创建并且设该目录为777权限再尝试！');
	}
	$control = new controller();		//实例化控制器
	$control->run();
//}else{
//	Header("Location:./register/index.php");
//}
        //Header("Location:./views/home/index.php");
?>
