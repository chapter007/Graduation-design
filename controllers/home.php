<?php

include 'conn.php';

class home extends controller {

    private $model = null;
    private $page = null;

    public function __construct() {
        parent::__construct();
        $this->model = $this->loadmodel('mhome');
        $this->page = $this->loadmodel('mpage');

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['header'] = "home";
        $_SESSION['username'] = "admin";
    }

    public function login() {
//        if (!isset($_SESSION['username'])) {
//            //header("Location: index.php?c=login&a=index", TRUE, 302);
//        }
        header("Location: ./views/login.php", TRUE, 302);
//        $data["total"] = 20;
//        $this->loadview('login', $data);
    }

    public function index() {
        $data["total"] = 20;
        $this->loadview('home/index', $data);
    }
	
	public function check_account() {
		$id=$_POST['id'];
		$password=$_POST['password'];
		$is_teacher=$_POST['teacher'];
		
		if($is_teacher==1){//是老师登陆
			$sql="select * from t_info where id= $id and password='$password' and admin=1";
			$result=mysql_query($sql);
			$tmp=mysql_num_rows($result);
			if($tmp==1){
				$data['result'] = 1;
			}else{
				$data['total'] = 0;
			}
			echo json_encode($data);
		}else{//学生登陆
			$sql="select * from s_info where id= $id and password='$password'";
			$result=mysql_query($sql);
			$tmp=mysql_num_rows($result);
			if($tmp==1){
				$data['result'] = 1;
			}else{
				$data['total'] = 0;
			}
			echo json_encode($data);
		}
    }
	
    public function getdata() {
        if (!isset($_POST['id'])) {
            Header("Location: ./views/login.php", TRUE, 302);
        }else{
			$s_id=$_POST['id'];
			$sql = "select * from s_info where id=$s_id";
			//echo $sql;
			$result = mysql_query($sql);
			$num = array();
			$i=0;
			if ($result) {
				while ($value = mysql_fetch_array($result)) {
					$num[$i] = array($value["id"],$value["name"],$value["mobile"],$value["qq"],$value["class"],$value["teacher"],$value["password"]);
					$i++;
				}
			}
			$data['total'] = 1;
			$data['student'] = $num[0];
			
			echo json_encode($data);
		}
		
    }
	
	public function get_single_data() {
			//在这个函数里把所有学生数据都读出来
			$s_id=$_POST['id'];
			$sql = "select * from s_info as si,s_other as so where so.id=$s_id and so.id=si.id";
			//echo $sql;
			$result = mysql_query($sql);
			$num = array();
			$i=0;
			if ($result) {
				while ($value = mysql_fetch_array($result)) {
					$num[$i] = array($value["id"],$value["name"],$value["mobile"],$value["qq"],$value["class"],$value["teacher"],
									$value["homework"],$value["attend"],$value["nightlearning"],$value["librarylend"],$value["feelhard"],$value["generalfeel"],$value["graduateplan"],$value["worklearning"],$value["sports"],$value["attendactivity"],$value["playgame"]);
					$i++;
				}
			}
			$data['total'] = 1;
			$data['student'] = $num[0];
			
			echo json_encode($data);
		
		
    }

	public function get_other_data() {
        if (!isset($_POST['id'])) {
            Header("Location: ./views/login.php", TRUE, 302);
        } 
		$s_id=$_POST['id'];
        $sql = "select * from s_other where id=$s_id";
		//echo $sql;
        $result = mysql_query($sql);
        $num = array();
        $i=0;
        if ($result) {
            while ($value = mysql_fetch_array($result)) {
                $num[$i] = array($value["id"],$value["homework"],$value["attend"],$value["nightlearning"],$value["librarylend"],
				$value["feelhard"],$value["generalfeel"],$value["graduateplan"],$value["worklearning"],$value["sports"],
				$value["attendactivity"],$value["playgame"]);
                $i++;
            }
        }
        $data['total'] = 1;
        $data['student'] = $num[0];
        
        echo json_encode($data);
    }
	
	public function up_data() {
		$id=$_POST['id'];
		$name=isset($_POST['name']) ? $_POST['name']:'null';
		$mobile=isset($_POST['mobile']) ? $_POST['mobile']:0;
		$qq=isset($_POST['qq']) ? $_POST['qq']:0;
		$myclass=isset($_POST['myclass']) ? $_POST['myclass']:0;
		$teacher=isset($_POST['teacher']) ? $_POST['teacher']:'null';
        $sql = "update s_info set mobile=$mobile,qq=$qq,class='$myclass',teacher='$teacher' where id=$id";
		echo $sql;
        $result = mysql_query($sql);
        if ($result) {
			$data['result'] = 1;
		}else{
			$data['result'] = 0;
		}
        
        echo json_encode($data);
    }
	
	public function up_other_data() {
        if (!isset($_POST['id'])) {
            Header("Location: ./views/login.php", TRUE, 302);
        } 
		$id=$_POST['id'];
		$homework=$_POST['homework'];
		$attend=$_POST['attend'];
		$nightlearning=$_POST['nightlearning'];
		$librarylend=$_POST['librarylend'];
		$feelhard=$_POST['feelhard'];
		$generalfeel=$_POST['generalfeel'];
		$graduateplan=$_POST['graduateplan'];
		$worklearning=$_POST['worklearning'];
		$sports=$_POST['sports'];
		$attendactivity=$_POST['attendactivity'];
		$playgame=$_POST['playgame'];
        
		//判断是否存在，若不存在则改为插入
		$sql_check="select * from s_other where id=$id";
		$result = mysql_query($sql_check);
        $tmp=mysql_num_rows($result);
		if($tmp==1){
			$sql = "update s_other set homework='$homework',attend='$attend',nightlearning='$nightlearning',librarylend='$librarylend',feelhard='$feelhard',generalfeel='$generalfeel',graduateplan='$graduateplan',worklearning='$worklearning',sports='$sports',attendactivity='$attendactivity',playgame='$playgame' where id=$id";
		}else if($tmp==0){
			$sql = "insert into s_other values ($id,'$homework','$attend','$nightlearning','$librarylend','$feelhard','$generalfeel','$graduateplan','$worklearning','$sports','$attendactivity','$playgame')";
		}
		
		//开始执行插入or更新命令
		$result = mysql_query($sql);
        
		if ($result) {
			$data['result'] = 1;
		}else{
			$data['result'] = 0;
		}
        
        echo json_encode($data);
    }

	public function up_lesson_data() {
        $id=$_POST['id'];
		$lesson=$_POST['lesson'];
		//lesson在js里是一个数组对象，这里需要把它解开
		$sql=makeSql($lesson,$id);
		//开始执行插入or更新命令
		$result = mysql_query($sql);
        
		if (mysql_affected_rows()) {
			$data['result'] = 1;
		}else{
			$data['result'] = 0;
		}
        
        echo json_encode($data);
    }
	
	public function change_passwd() {
        $id=$_POST['id'];
		$n_passwd=$_POST['n_passwd'];
		$o_passwd=$_POST['o_passwd'];
		$type=$_POST['type'];
		if($type){
			$sql="update t_info set `password` = '$n_passwd' where id=$id and `password` = '$o_passwd'";
		}else{
			$sql="update s_info set `password` = '$n_passwd' where id=$id and `password` = '$o_passwd'";
		}
		//echo $sql;break;
		$result = mysql_query($sql);
        //mysql_affected_rows()用来判断update是否成功
		if (mysql_affected_rows()) {
			$data['result'] = 1;
		}else{
			$data['result'] = 0;
		}
        
        echo json_encode($data);
    }
	
	public function get_student_data() {
			$page=$_POST['page'];
			$t_id=$_POST['t_id'];
			$offset=($page-1)*20;
			$sql = "select * from s_info limit $offset,20";
			//echo $sql;
			$result = mysql_query($sql);
			$num = array();
			$i=0;
			if ($result) {
				while ($value = mysql_fetch_array($result)) {
					$num[$i] = array($value["id"],$value["name"],$value["mobile"],$value["qq"],$value["class"],$value["teacher"]);
					$i++;
				}
			}
			$data['total'] = $i;
			for($j=0;$j<$i;$j++){
				$data['s'.$j] = $num[$j];
			}
			$sql = "select count(*) as total from s_info";
			$result = mysql_query($sql);
			if ($result) {
				$value = mysql_fetch_array($result);
				$data['total_all']=$value['total'];
			}
			//查询老师姓名
			$sql = "select * from t_info where id= $t_id";
			$result = mysql_query($sql);
			if ($result) {
				$value = mysql_fetch_array($result);
				$data['t_name']=$value['name'];
			}
			echo json_encode($data);
    }
	
	public function get_chart_data(){
		$categroy=$_POST['categroy'];
		$sql="SELECT $categroy from s_other order by $categroy";
		$result = mysql_query($sql);
		$num = array();
		$i=0;$j=0;$k=0;
			if ($result) {
				while ($value = mysql_fetch_array($result)) {
					if($value["$categroy"]==0){
						$i++;
					}else if($value["$categroy"]==1){
						$j++;
					}else if($value["$categroy"]==2){
						$k++;
					}
					
				}
			}
			$data['i'] = $i;
			$data['j'] = $j;
			$data['k'] = $k;
		echo json_encode($data);
	}
	
	public function get_lesson_data() {
        $id=$_POST['id'];
		$sql = "SELECT sl.c_id,sc.`name`,ti.`name` as teacher,sl.score from s_lesson as sl,s_course as sc,t_info as ti 
				where sl.s_id=$id and sl.c_id=sc.id and ti.id=sc.teacher_id";
		$result = mysql_query($sql);
		$num = array();
		$i=0;
			if ($result) {
				while ($value = mysql_fetch_array($result)) {
					$num[$i] = array($value["c_id"],$value["name"],$value["teacher"],$value["score"]);
					$i++;
				}
			}
			$data['total'] = $i;
			for($j=0;$j<$i;$j++){
				$data['s'.$j] = $num[$j];
			}
			echo json_encode($data);
    }
	
	public function get_page_data() {
        
			$sql = "select count(*) as total from s_info";
			//echo $sql;
			$result = mysql_query($sql);
			$num = array();
			$i=0;
			if ($result) {
				while ($value = mysql_fetch_array($result)) {
					$data['total'] = $value["total"];
				}
			}
			echo json_encode($data);
    }
	
}

function makeSql($lesson,$id){
		$sql="UPDATE s_lesson
			SET score = CASE c_id ";
		foreach($lesson as $les){
			$tmp="WHEN {$les['id']} THEN {$les['score']} ";
			$sql.=$tmp;
		}
		return $sql."END WHERE s_id=$id";
	}
