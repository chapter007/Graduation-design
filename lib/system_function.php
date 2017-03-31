<?php

/**
 * 时间展示函数（为了批量操作中时间显示）
 * $cycle ,$date ,$time
 */
function showTimes($cycle, $date, $time) {
    $weekarr = array(
        'Mon' => '星期一',
        'Tue' => '星期二',
        'Wed' => '星期三',
        'Thu' => '星期四',
        'Fri' => '星期五',
        'Sat' => '星期六',
        'Sun' => '星期天'
    );
    switch ($cycle) {
        case 'Monthly':
            echo '每月' . $date . '号:' . $time;
            break;
        case 'Weekly':
            $week = explode('|', $date);
            $rundate = '';
            foreach ($week as $key) {
                $rundate .=$weekarr[$key] . ',';
            }
            echo '每周' . trim($rundate, ',') . ':' . $time;
            break;
        case 'Every-day':
            echo '每天:' . $time;
            break;
        case 'One-time':
            echo $time;
            break;
    }
}

/* * *
 *  递归创建目录文件
 */

function mkdirs($dir) {
    if (!is_dir($dir)) {
        if (!mkdirs(dirname($dir))) {
            return false;
        }
        if (!mkdir($dir, 0777)) {
            return false;
        }
    }
    return true;
}

/**
 * 加密函数
 */
function passwdhash($password) {
    $prefix = PASSWORD_PREFIX ? PASSWORD_PREFIX : 'ghs';
    $salt = sha1($prefix);
    $salt = substr($salt, 0, 4);
    $hash = base64_encode($salt . sha1($salt . $password, true));
    return $hash;
}

/**
 * 字符判断是否在字符串中
 */
function checkstr($perstr, $value) {
    $perarr = explode(',', $perstr);
    foreach ($perarr as $key) {
        if ($key == $value)
            return true;
    }
    return false;
}

/**
 * output status
 */
function getSatus($status) {
    if($status == 0){
        echo '<i class="fa fa-circle green"  title="运行正常"></i>';
    }elseif($status >0 && $status <=300){
        echo '<i class="fa fa-exclamation-triangle yellow" title="异常"></i>';
    }elseif($status >300) {
        echo '<i class="fa fa-exclamation-triangle red" title="严重异常"></i>';
    }
}

/**
 * 解析字符传
 * @param $data
 */
function jsonDecode($data) {
    if (is_string($data)) {
        $data = str_replace(
                array('{', '[', ']', '}', ':', 'null'), array('array(', 'array(', ')', ')', '=>', 'NULL')
                , $data);
        @$data = eval("return $data;");
        return $data;
    } else {
        return false;
    }
}

/**
 * 还原字符传
 * @param $data
 */
function jsonEncode($data) {
    if (is_string($data)) {
        $data = str_replace("=>", ":", $data);
        return $data;
    } else {
        return false;
    }
}

/**
 * 截取字符传
 */
function cu_substr($str, $start = 0, $length = null, $charset = 'utf-8') {

    $rs['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
    $rs['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
    $rs['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
    preg_match_all($rs[$charset], $str, $match);
    $result = implode("", array_slice($match[0], $start, $length));
    return $result;
}

/**
 * 处理ckeditor 图片显示
 */
function mkhtml($fn, $fileurl, $message) {
    $str = '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction(' . $fn . ', \'' . $fileurl . '\', \'' . $message . '\');</script>';
    exit($str);
}

/**
 * 获取操作系统
 */
function getSystem() {
    $sys = $_SERVER['HTTP_USER_AGENT'];
    if (stripos($sys, "NT 6.1"))
        $os = "Windows 7";
    elseif (stripos($sys, "NT 6.0"))
        $os = "Windows Vista";
    elseif (stripos($sys, "NT 5.1"))
        $os = "Windows XP";
    elseif (stripos($sys, "NT 5.2"))
        $os = "Windows Server 2003";
    elseif (stripos($sys, "NT 5"))
        $os = "Windows 2000";
    elseif (stripos($sys, "NT 4.9"))
        $os = "Windows ME";
    elseif (stripos($sys, "NT 4"))
        $os = "Windows NT 4.0";
    elseif (stripos($sys, "98"))
        $os = "Windows 98";
    elseif (stripos($sys, "95"))
        $os = "Windows 95";
    elseif (stripos($sys, "Mac"))
        $os = "Mac";
    elseif (stripos($sys, "Linux"))
        $os = "Linux";
    elseif (stripos($sys, "Unix"))
        $os = "Unix";
    elseif (stripos($sys, "FreeBSD"))
        $os = "FreeBSD";
    elseif (stripos($sys, "SunOS"))
        $os = "SunOS";
    elseif (stripos($sys, "BeOS"))
        $os = "BeOS";
    elseif (stripos($sys, "OS/2"))
        $os = "OS/2";
    elseif (stripos($sys, "PC"))
        $os = "Macintosh";
    elseif (stripos($sys, "AIX"))
        $os = "AIX";
    else
        $os = "未知操作系统";
    return $os;
}

function randomkey() {
    $str = "1,2,3,4,5,6,7,8,9,a,b,c,d,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
    $list = explode(",", $str);
    $cmax = count($list) - 1;
    $key = '';
    for ($i = 0; $i < 10; $i++) {
        $randnum = mt_rand(0, $cmax);
        $key .= $list[$randnum];
    }
    $key .=sha1(date('YmdHis'));
    return base64_encode($key);
}

function substr_cut($str, $len, $Append = true) {
    if (strlen($str) <= $len) {
        return $str;
    }
    $i = 0;
    while ($i < $len) {
        $StringTMP = substr($str, $i, 1);
        if (ord($StringTMP) >= 224) {
            $StringTMP = substr($str, $i, 3);
            $i = $i + 3;
        } elseif (ord($StringTMP) >= 192) {
            $StringTMP = substr($str, $i, 2);
            $i = $i + 2;
        } else {
            $i = $i + 1;
        }
        $StringLast[] = $StringTMP;
    }
    $StringLast = implode("", $StringLast);
    if ($Append) {
        $StringLast .= "...";
    }
    return $StringLast;
}

function getSysTile() {
    return '三实信息系统健康监测平台V1.0';
}

function getCompany() {
    return '安徽三实信息技术服务有限公司';
}

?>
