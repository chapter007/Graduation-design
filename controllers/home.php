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

    public function getdata() {
        if (!isset($_SESSION['s_id'])) {
            Header("Location: ./views/login.php", TRUE, 302);
        } 
		$s_id=$_SESSION['s_id'];
        $sql = "select * from s_info where id=$s_id";
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
        $data['total'] = 1;
        $data['student'] = $num[0];
        
        echo json_encode($data);
    }

	public function get_other_data() {
        if (!isset($_SESSION['s_id'])) {
            Header("Location: ./views/login.php", TRUE, 302);
        } 
		$s_id=$_SESSION['s_id'];
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

}
