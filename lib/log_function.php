<?php

/**
 * sava log
 */

function logs_error($content=''){
	if(empty($content)){
		return ;
	}	
	$today=date("Y-m-d",time()); 
	$filename = PHPLOG_PATH.$today.'.log';
	$msg = "时间：".date("Y-m-d H:i:s",time());
	$content = $msg." ".$content."\n";
	
	if(is_writable($filename)){
		@file_put_contents($filename,$content,FILE_APPEND);
	}else{
		 $f=fopen($filename,'a+');
         fwrite($f,$content);
         fclose($f);
                
	}	
}


function log_debug($content){

	if(empty($content)){
		return ;
	}
	$filepath = PHPLOG_PATH.'debug.log';

	$msg = "时间：".date("Y-m-d H:i:s",time());
	$content = $msg." ".$content."\n";
	if(is_writable($filepath)){
		@file_put_contents($filepath,$content,FILE_APPEND);
	}else{
		 $f=fopen($filepath,'a+');
         fwrite($f,$content);
         fclose($f);
	}	
}