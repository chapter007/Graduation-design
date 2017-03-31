<?php
class model{
	
	var $db = null;
	
	public function __construct(){
		$this->db = new db(MYSQL_CONN_DNS,MYSQL_CONN_USER,MYSQL_CONN_PASSWD,MYSQL_CONN_CHARSET,MYSQL_CONN_PRIFIX);
	}
	
	
	/**
	 * 加载其他模型
	 */
	public function loadmodel($modelname,$param =''){
		$model_file = PHPMODEL_PATH.$modelname.'.php';
		if(!file_exists($model_file)) 
		{ 
			$data['error'] = '模型不存在' . $model_file  ;
			$this->loadview('error',$data);
			exit('');
		}		
		include($model_file);//存在, 则引入
		if(stripos($modelname ,'/')){
			$model = explode('/',$modelname);
			$n = count($model);
			$class = $model[$n-1];
		}
		else{
			$class = $modelname;
		}//获得模型类名
		if(!class_exists($class))
		{
			$data['error'] = '未定义的模型' . $class  ;
			$this->loadview('error',$data);
			exit('');
		} 	
		$model = new $class($param);	//实例化模型类
		return $model;	
	}
	
	/**
	 * 加载视图
	 */
	public function loadview($file , $data=array()){
		$view_file = PHPVIEWS_PATH.$file.'.php';
		if(!empty($data)){
			extract($data);
		}
		if(!file_exists($view_file)) 
		{ 
			$data['error'] = '视图不存在' . $view_file ;
			$this->loadview('error',$data);
			exit('');
		}
		include($view_file);
	}
	
}