<?php
/**
-------------------
配置文件注释：核心配置文件，定义数据库配置，socket端口等!

write by:guohusheng
*/  
//定义公共配置文件目录
define('PUBETC_PATH','/usr/local/osa/etc/'); 

//定义PHP配置文件存档路径
define('PHPETC_PATH',PHPROOT_PATH.'/etc/'); 

//定义PHP库文件路径
define('PHPLIB_PATH',PHPROOT_PATH.'/lib/'); 

//定义 模块封装方法路径
define('PHPMODEL_PATH',PHPROOT_PATH.'/models/'); 

//定义controllers封装方法路径
define('PHPCONTROLLERS_PATH',PHPROOT_PATH.'/controllers/'); 

//定义模块封装方法路径
define('PHPVIEWS_PATH',PHPROOT_PATH.'/views/'); 

//定义PHP日志文件路径
define('PHPLOG_PATH',PHPROOT_PATH.'/log/'); 

//定义PHP session文件路径
define('PHPSESSION_PATH',PHPROOT_PATH.'/session/'); 

//定义PHP session超时时间
define('SESSION_EXPIRE_TIME',84000); 

//定义PHPinclude路径
define('PHPINCLUDE_PATH',PHPROOT_PATH.'/include/');  

//定义邮件类路径
define('PHPMAIL_PATH',PHPROOT_PATH.'/phpmailer/');   

/**
*定义数据库连接信息
*MYSQL_CONN_DNS 连接字符串
*MYSQL_CONN_USER 用户名
*MYSQL_CONN_PASSWD 密码
*MYSQL_CONN_USER 字符集
*/
define('MYSQL_CONN_DNS','mysql:dbname=ss_new;host=127.0.0.1;port=3306'); 

define('MYSQL_CONN_USER','root');

define('MYSQL_CONN_PASSWD','12344');

define('MYSQL_CONN_CHARSET','utf8');

define('MYSQL_CONN_PRIFIX','ghs');

/*数据库配置定义结束 */

/**
*定义登录部分安全设置
BLOCK_IP 是否开启IP限制登录，默认为0不开启,1为开启！
BLOCK_FILE  锁定IP的文件，一行一个！
TRY_LOGIN_NUM 最多可尝试几次登录。
PASSWORD_PREFIX 密码前缀
*/


define('BLOCK_IP',0); 

define('BLOCK_FILE',PHPLOG_PATH.'/blockip.txt'); 

define('TRY_LOGIN_NUM',3); 

define('PASSWORD_PREFIX','ghs'); 

?>
