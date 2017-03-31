<?php 
/**
*程序初始化
*/

//包含配置文件
//require_once '../etc/ows_config.inc.php';

//关闭magic_quotes_gpc
if (get_magic_quotes_gpc()){
		ini_set ( 'magic_quotes_gpc' , 'off') ;        
}

//如果session是文件存储，则指定路径
if( ! ini_get('session.save_path') || ini_get('session.save_handler') == 'files' ){
	ini_set ( 'session.save_handler' , 'files');
	ini_set ( 'session.save_path' ,PHPSESSION_PATH) ;
	ini_set('session.gc_maxlifetime', SESSION_EXPIRE_TIME);
}

//如果session目录不存在则创建
if(!is_dir(PHPSESSION_PATH)){
    @mkdir(PHPSESSION_PATH);
	@chmod(PHPSESSION_PATH, 0777);
}

//log目录创建
if(!is_dir(PHPLOG_PATH)){
	@mkdir(PHPLOG_PATH);
	@chmod(PHPLOG_PATH, 0777);
}

//指定编码
header("Content-type: text/html; charset=utf-8"); 

if (strnatcmp(phpversion(),'5.2.0') < 0)
{
	exit('请使用5.2.0以上的版本运行本程序！');
}

function iswriteable($file){
	clearstatcache();
	if(is_dir($file)){
		$dir=$file;
		if($fp = @fopen("$dir/test.txt", 'w')) {
			@fclose($fp);
			@unlink("$dir/test.txt");
			$writeable = 1;
		}else{
			$writeable = 0;
		}
		
	}else{
	
		if($fp = @fopen($file, 'a+')) {
			@fclose($fp);
			$writeable = 1;
		}else {
			$writeable = 0;
		}
	}
	
return $writeable;
}

if(!iswriteable(PHPSESSION_PATH)){

	exit(PHPSESSION_PATH.'不可写,请创建并且设该目录为777权限再尝试！');

}

//log目录是否可写
if(!iswriteable(PHPLOG_PATH)){

	exit(PHPLOG_PATH.'不可写,请创建并且设该目录为777权限再尝试！');

}

session_start();

//包含数据库文件
require_once PHPLIB_PATH.'./db.class.php';

//系统核心函数
require_once PHPLIB_PATH.'./system_function.php';

//系统帮助函数
require_once PHPLIB_PATH.'./help_function.php';

//系统日志函数
require_once PHPLIB_PATH.'./log_function.php';

//权限控制
require_once PHPLIB_PATH.'./permission_function.php';

//参数安全过滤
require_once PHPLIB_PATH.'./security.inc.php';


require_once PHPINCLUDE_PATH.'./controllers.class.php';

require_once PHPINCLUDE_PATH.'./model.class.php';

