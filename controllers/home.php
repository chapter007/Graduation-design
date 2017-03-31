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
//        $user=  htmlspecialchars($_POST["email"]);
//    $password=  htmlspecialchars($_POST["password"]);
//    if($password=='root'&&$user=='root'){
//         $data["total"] = 20;
//         $this->loadview('home/index', $data);
//   
//    }
    }

    public function getpies() {
        if (!isset($_SESSION['username'])) {
            header("Location: index.php?c=login&a=index", TRUE, 302);
        }
        $total = 20;
        $alarmNum = "[['正常',18],['故障',2]]";
        $alarmLevel = "[['严重',3],['一般',5],['提示',6]]";
        $devYear = "[['2012',3],['2013',5],['2014',2],['2015',4],['早期',6]]";

        $data['total'] = $total;
        $data['alarmNum'] = $alarmNum;
        $data['alarmLevel'] = $alarmLevel;
        $data['devYear'] = $devYear;
        echo json_encode($data);
    }

    public function getlines() {
        if (!isset($_SESSION['username'])) {
            header("Location: index.php?c=login&a=index", TRUE, 302);
        }
        $total = 20;
        $num = array(rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70));
        $num2 = array(rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70));
        $data['total'] = $total;
        $data['num'] = $num;
        $data['num2'] = $num2;
        echo json_encode($data);
    }

    public function getlines2() {
        if (!isset($_SESSION['username'])) {
            header("Location: index.php?c=login&a=index", TRUE, 302);
        }
        $sql = "select * from property_test";
        $result = mysql_query($sql);
        //$value = mysql_fetch_array($result);
        $total = 20;
        $num = array();
        $i=0;
        if ($result) {
            while ($value = mysql_fetch_array($result)) {
                $num[$i] = array($value["one"],$value["two"],$value["three"],$value["four"],$value["five"],$value["six"],$value["seven"]);
                $i++;
            }
        }
//        $num = array(rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70));
//        $num2 = array(rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70));
//        $num3 = array(rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70));
//        $num4 = array(rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70));
//        $num5 = array(rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70));
//        $num6 = array(rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70), rand(20, 70));
        $data['total'] = $total;
        $data['num'] = $num[0];
        $data['num2'] = $num[1];
        $data['num3'] = $num[2];
        $data['num4'] = $num[3];
        $data['num5'] = $num[4];
        $data['num6'] = $num[5];
        echo json_encode($data);
    }

    public function getInfo() {
        if (!isset($_SESSION['username'])) {
            header("Location: index.php?c=login&a=index", TRUE, 302);
        }
        $total = 20;
        $alertnum = "'告警数：5'";
        $alertrank = 100;
        $alertinfo = "'告警信息：CPU使用率100%，持续5秒CPU使用率100%'";
        $ppinfo_num = "'资产编号：SJ-A-B01-WL-002'";
        $ppinfo_type = "'资产类型：网络设备管理'";
        $ppinfo_ip = "'IP：172.12.0.2'";
        $ppinfo_site = "'资产位置：B01机柜，22U'";
        $ppinfo_use = "'资产用途：服务器接入'";
        $data['total'] = $total;
        $data['alertnum'] = $alertnum;
        $data['alertrank'] = $alertrank;
        $data['alertinfo'] = $alertinfo;
        $data['ppinfo_num'] = $ppinfo_num;
        $data['ppinfo_type'] = $ppinfo_type;
        $data['ppinfo_ip'] = $ppinfo_ip;
        $data['ppinfo_site'] = $ppinfo_site;
        $data['ppinfo_use'] = $ppinfo_use;
        echo json_encode($data);
    }

}
