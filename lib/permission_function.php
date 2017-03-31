<?php

/**
 * 权限检查
 */

/*检查是否登录*/
function is_login(){

	$r = ! empty($_SESSION['username']) ? true : false ;

	return $r;

}

