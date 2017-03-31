<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- Head -->
    <head>
        <meta charset="utf-8" />
        <title>资产列表</title>
        <meta name="description" content="index" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon"/>
        <!--Basic Styles-->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../assets/css/weather-icons.min.css" rel="stylesheet" />
        <!--Fonts-->
        <!--Beyond styles-->
        <link  href="../assets/css/beyond.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo.min.css" rel="stylesheet" />
        <link href="../assets/css/typicons.min.css" rel="stylesheet" />
        <link href="../assets/css/animate.min.css" rel="stylesheet" />
        <link href="../assets/css/star-rating.min.css" rel="stylesheet" />

        <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
        <script src="../assets/js/skins.min.js"></script>
    </head>
    <!-- /Head -->
    <!-- Body -->
    <body  data-spy="scroll" data-target="#myScrollspy">
        <?php include '../views/header.php'; ?>
        <!-- Main Container -->
        <div class="main-container container-fluid">
            <!-- Page Container -->
            <div class="page-container">
                <!-- Page Sidebar -->
                <div class="page-sidebar " id="sidebar">

                    <!-- Page Sidebar Header-->
                    <!--                    <div class="sidebar-header-wrapper">
                                            <input type="text" class="searchinput" />
                                            <i class="searchicon fa fa-search"></i>
                                            <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                                        </div>-->
                    <!-- /Page Sidebar Header -->
                    <!-- Sidebar Menu -->
                    <ul class="nav sidebar-menu">
                        <!--首页-->
                        <li class="_home">
                            <a href="../views/home/index.php">
                                <i class="menu-icon glyphicon glyphicon-home"></i>
                                <span class="menu-text"> 首页 </span>
                            </a>
                        </li>
                        <!--设备管理-->
                        <li class="active open">
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon fa fa-desktop "></i>
                                <span class="menu-text"> 信息资产管理 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="#" >
                                        <i class="menu-icon glyphicon glyphicon-home"></i>
                                        <span class="menu-text"> 资产总览（空） </span>
                                    </a>
                                </li>

                                <li  class="open">
                                    <a href="#" class="menu-dropdown">
                                        <i class="menu-icon fa fa-th"></i>
                                        <span class="menu-text"> 资产列表</span>
                                        <i class="menu-expand"></i>
                                    </a>
                                    <ul class="submenu" style="display: block;">
                                        <li class="active">
                                            <a href="list.php">
                                                <i class="menu-icon glyphicon glyphicon-tasks"></i>
                                                <span class="menu-text"> 网络资产 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="menu-icon glyphicon glyphicon-tasks"></i>
                                                <span class="menu-text"> 主机资产 （空）</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="menu-icon glyphicon glyphicon-tasks"></i>
                                                <span class="menu-text"> 安全资产（空） </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="menu-icon glyphicon glyphicon-tasks"></i>
                                                <span class="menu-text"> 储存资产（空） </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="menu-dropdown">
                                        <i class="menu-icon fa fa-desktop"></i>
                                        <span class="menu-text"> 资产报表（空）</span>
                                    </a>
                                </li>
                                <!--                    <li>
                                                        <a href="#" class="menu-dropdown">
                                                            <i class="menu-icon fa fa-desktop"></i>
                                                            <span class="menu-text"> 单资产展示 </span>
                                                        </a>
                                                     </li>-->
                            </ul>
                        </li>
                        <!--业务管理-->
                        <li class="_application">
                            <a href="#">
                                <i class="menu-icon glyphicon glyphicon-tasks"></i>
                                <span class="menu-text"> 服务方管理（空） </span>
                            </a>
                        </li>
                        <!--链路管理-->
                        <li class="_link">
                            <a href="#" >
                                <i class="menu-icon glyphicon glyphicon-link"></i>
                                <span class="menu-text">
                                    资产仿真管理（空）
                                </span>

                            </a>
                        </li>
                        <!--网页管理-->
                        <li class="_home">
                            <a href="#">
                                <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                                <span class="menu-text"> 文档管理（空）</span>
                            </a>
                        </li>
                        <!--业务路径-->
                        <li class="_applink">
                            <a href="#">
                                <i class="menu-icon glyphicon glyphicon-transfer"></i>
                                <span class="menu-text"> 业务路径（空） </span>
                            </a>

                        </li>
                        <!--报表中心-->
                        <li class="_report">
                            <a href="#">
                                <i class="menu-icon fa fa-bar-chart-o"></i>
                                <span class="menu-text"> 报表中心（空） </span>
                            </a>

                        </li>
                        <!--告警中心-->
                        <li class="_alarm">
                            <a href="alert.php">
                                <i class="menu-icon fa fa-envelope-o"></i>
                                <span class="menu-text"> 告警中心 </span>
                            </a>
                        </li>

                        <!--系统设置-->
                        <li class="_system">
                            <a href="#">
                                <i class="menu-icon glyphicon glyphicon-cog"></i>
                                <span class="menu-text"> 系统设置（空） </span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- /Page Sidebar -->
                <!-- Page Content -->
                <div class="page-content">
                    <!-- Page Breadcrumb -->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="../views/home/index.php">首页</a>
                            </li>
                            <li >资产管理</li>
                        </ul>
                    </div>
                    <!-- /Page Breadcrumb -->
                    <!-- Page Header -->
                    <div class="page-header position-relative">
                        <div class="header-title">
                            <h1>
                                首页
                                <small>
                                    <i class="fa fa-angle-right"></i>
                                    资产列表
                                </small>
                            </h1>
                        </div>
                        <!--Header Buttons-->
                        <div class="header-buttons">
                            <a class="sidebar-toggler" href="#">
                                <i class="fa fa-arrows-h"></i>
                            </a>
                            <a class="refresh" id="refresh-toggler" href="">
                                <i class="glyphicon glyphicon-refresh"></i>
                            </a>
                            <a class="fullscreen" id="fullscreen-toggler1" href="#">
                                <i class="glyphicon glyphicon-fullscreen"></i>
                            </a>
                        </div>

                    </div>
                    <!-- /Page Header -->
                    <!-- Page Body -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-xs-6 " style="width: 450px">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <a class="btn btn-blue" href="javascript:void(0);">关键字</a>
                                        <a class="btn btn-blue dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu dropdown-blue">
                                            <li>
                                                <a href="javascript:void(0);">网络</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">主机</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">安全</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">储存</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <input class="form-control" type="search" placeholder="搜索"></input>
                                </div>
                            </div>
                        </div>
                        <div class="horizontal-space space-lg"></div>
                        <div class="row">
                            <div class="col-lg-12" >
                                <div class="tabbable">
                                    <ul id="myTab" class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#alert">告警资产</a>
                                        </li>
                                        <li class="tab-red" >
                                            <a href="#old" >过保资产</a>
                                        </li>
                                        <li class="tab-green">
                                            <a href="#add">添加资产</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="alert"class="tab-pane active">
                                            <div class="row">
                                                <div class="col-lg-12">    
                                                    <div class="btn-group">
                                                        <button class="btn active" type="button">排序：</button>
                                                        <button class="btn btn-default" type="button">重要性</button>
                                                        <button class="btn btn-default" type="button">告警等级</button>
                                                        <button class="btn btn-default" type="button">时间</button>
                                                        <button class="btn btn-default" type="button">事件</button>
                                                        <button class="btn btn-default" type="button">告警数</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="horizontal-space"></div>
                                            <!--三个横幅-->
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="task-check">
                                                        <label>
                                                            <input type="checkbox"></input>
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lgr-4 col-sm-4 col-xs-4" id="single">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="bg-darkgray">
                                                                <span class="databox-text pull-left ">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="alertnum0"></li>
                                                                        <li id="alertrank">告警级别：</li>
                                                                        <div  class="rating static-rating" data-role="rating" data-param-vote="off" data-param-rating="3.7" style="width: 135px">
                                                                            <div id="alertrank0" class="rating-value"></div>
                                                                        </div>
                                                                        <li id="alertinfo0"></li>
                                                                    </ul>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgmy-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="row">
                                                                <span class="databox-text pull-left no-margin">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="ppinfo_num0"></li>
                                                                        <li id="ppinfo_type0"></li>
                                                                        <li id="ppinfo_ip0"></li>	
                                                                        <li id="ppinfo_site0"></li>
                                                                        <li id="ppinfo_use0"></li>
                                                                    </ul>                                             
                                                                </span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-3" style="margin-left: 20px">
                                                                    <a class="btn btn-blue" href="single.php">编辑此资产</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgl-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg radius-bordered databox-shadowed databox-graded">
                                                            <div class="databox-stat radius-bordered">
                                                                <div class="stat-text">cpu0/cpu1趋势图</div>
                                                            </div>
                                                            <div style="width:100%" id="line11">
                                                                <div>
                                                                    <canvas id="canvas" height="350" width="800"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="task-check">
                                                        <label>
                                                            <input type="checkbox"></input>
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lgr-4 col-sm-4 col-xs-4" id="single">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="bg-darkgray">
                                                                <span class="databox-text pull-left ">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="alertnum1"></li>
                                                                        <li id="alertrank">告警级别：</li>
                                                                        <div  class="rating static-rating" data-role="rating" data-param-vote="off" data-param-rating="3.7" style="width: 135px">
                                                                            <div id="alertrank1" class="rating-value"></div>
                                                                        </div>
                                                                        <li id="alertinfo1"></li>
                                                                    </ul>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgmy-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="row">
                                                                <span class="databox-text pull-left no-margin">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="ppinfo_num1"></li>
                                                                        <li id="ppinfo_type1"></li>
                                                                        <li id="ppinfo_ip1"></li>	
                                                                        <li id="ppinfo_site1"></li>
                                                                        <li id="ppinfo_use1"></li>
                                                                    </ul>                                             
                                                                </span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-3" style="margin-left: 20px">
                                                                    <a class="btn btn-blue" href="single.php">编辑此资产</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgl-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg radius-bordered databox-shadowed databox-graded">
                                                            <div class="databox-stat radius-bordered">
                                                                <div class="stat-text">flow0/flow1趋势图</div>
                                                            </div>
                                                            <div style="width:100%" id="line12">
                                                                <div>
                                                                    <canvas id="canvas1" height="350" width="800"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="task-check">
                                                        <label>
                                                            <input type="checkbox"></input>
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lgr-4 col-sm-4 col-xs-4" id="single">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="row">
                                                                <span class="databox-text pull-left ">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="alertnum2"></li>
                                                                        <li id="alertrank">告警级别：</li>
                                                                        <div  class="rating static-rating" data-role="rating" data-param-vote="off" data-param-rating="3.7" style="width: 135px">
                                                                            <div id="alertrank2" class="rating-value"></div>
                                                                        </div>
                                                                        <li id="alertinfo2"></li>
                                                                    </ul>
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lgmy-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="row">
                                                                <span class="databox-text pull-left no-margin">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="ppinfo_num2"></li>
                                                                        <li id="ppinfo_type2"></li>
                                                                        <li id="ppinfo_ip2"></li>	
                                                                        <li id="ppinfo_site2"></li>
                                                                        <li id="ppinfo_use2"></li>
                                                                    </ul>                                             
                                                                </span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-3" style="margin-left: 20px">
                                                                    <a class="btn btn-blue" href="single.php">编辑此资产</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgl-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg radius-bordered databox-shadowed databox-graded">
                                                            <div class="databox-stat radius-bordered">
                                                                <div class="stat-text">mem1/mem2趋势图</div>
                                                            </div>
                                                            <div style="width:100%" id="line13">
                                                                <div>
                                                                    <canvas id="canvas2" height="350" width="800"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="horizontal-space"></div>
                                            <div class="row">
                                                <div class="col-xs-6 offset5">
                                                    <ul class="pagination">
                                                        <li class="disabled">
                                                            <a href="#"><<</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">>></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="old"class="tab-pane">
                                            <div class="row">
                                                <div class="col-lg-12">    
                                                    <div class="btn-group">
                                                        <button class="btn active" type="button">排序：</button>
                                                        <button class="btn btn-default" type="button">重要性</button>
                                                        <button class="btn btn-default" type="button">告警等级</button>
                                                        <button class="btn btn-default" type="button">时间</button>
                                                        <button class="btn btn-default" type="button">事件</button>
                                                        <button class="btn btn-default" type="button">告警数</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="horizontal-space"></div>
                                            <!--三个横幅-->
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="task-check">
                                                        <label>
                                                            <input type="checkbox"></input>
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lgr-4 col-sm-4 col-xs-4" id="single">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="bg-darkgray">
                                                                <span class="databox-text pull-left ">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="alertnum3"></li>
                                                                        <li id="alertrank">告警级别：</li>
                                                                        <div  class="rating static-rating" data-role="rating" data-param-vote="off" data-param-rating="3.7" style="width: 135px">
                                                                            <div id="alertrank3" class="rating-value"></div>
                                                                        </div>
                                                                        <li id="alertinfo3"></li>
                                                                    </ul>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgmy-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="row">
                                                                <span class="databox-text pull-left no-margin">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="ppinfo_num3"></li>
                                                                        <li id="ppinfo_type3"></li>
                                                                        <li id="ppinfo_ip3"></li>	
                                                                        <li id="ppinfo_site3"></li>
                                                                        <li id="ppinfo_use3"></li>
                                                                    </ul>                                             
                                                                </span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-3" style="margin-left: 20px">
                                                                    <a class="btn btn-blue" href="single.php">编辑此资产</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgl-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg radius-bordered databox-shadowed databox-graded">
                                                            <div class="databox-stat radius-bordered">
                                                                <div class="stat-text">趋势图</div>
                                                            </div>
                                                            <div style="width:100%" id="line1">
                                                                <!--                                                                    <div>
                                                                                                                                        <canvas id="ocanvas" height="350" width="800"></canvas>
                                                                                                                                    </div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="task-check">
                                                        <label>
                                                            <input type="checkbox"></input>
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lgr-4 col-sm-4 col-xs-4" id="single">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="bg-darkgray">
                                                                <span class="databox-text pull-left ">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="alertnum4"></li>
                                                                        <li id="alertrank">告警级别：</li>
                                                                        <div  class="rating static-rating" data-role="rating" data-param-vote="off" data-param-rating="3.7" style="width: 135px">
                                                                            <div id="alertrank4" class="rating-value"></div>
                                                                        </div>
                                                                        <li id="alertinfo4"></li>
                                                                    </ul>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgmy-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="row">
                                                                <span class="databox-text pull-left no-margin">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="ppinfo_num4"></li>
                                                                        <li id="ppinfo_type4"></li>
                                                                        <li id="ppinfo_ip4"></li>	
                                                                        <li id="ppinfo_site4"></li>
                                                                        <li id="ppinfo_use4"></li>
                                                                    </ul>                                             
                                                                </span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-3" style="margin-left: 20px">
                                                                    <a class="btn btn-blue" href="single.php">编辑此资产</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgl-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg radius-bordered databox-shadowed databox-graded">
                                                            <div class="databox-stat radius-bordered">
                                                                <div class="stat-text">趋势图</div>
                                                            </div>
                                                            <div style="width:100%" id="line2">
                                                                <!--                                                                        <div>
                                                                                                                                            <canvas id="ocanvas1" height="350" width="800"></canvas>
                                                                                                                                        </div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="task-check">
                                                        <label>
                                                            <input type="checkbox"></input>
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lgr-4 col-sm-4 col-xs-4" id="single">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="bg-darkgray">
                                                                <span class="databox-text pull-left ">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="alertnum5"></li>
                                                                        <li id="alertrank">告警级别：</li>
                                                                        <div  class="rating static-rating" data-role="rating" data-param-vote="off" data-param-rating="3.7" style="width: 135px">
                                                                            <div id="alertrank5" class="rating-value"></div>
                                                                        </div>
                                                                        <li id="alertinfo5"></li>
                                                                    </ul>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgmy-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                            <div class="row">
                                                                <span class="databox-text pull-left no-margin">
                                                                    <ul style="list-style-type: none;">
                                                                        <li id="ppinfo_num5"></li>
                                                                        <li id="ppinfo_type5"></li>
                                                                        <li id="ppinfo_ip5"></li>	
                                                                        <li id="ppinfo_site5"></li>
                                                                        <li id="ppinfo_use5"></li>
                                                                    </ul>                                             
                                                                </span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-3" style="margin-left: 20px">
                                                                    <a class="btn btn-blue" href="single.php">编辑此资产</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lgl-4 col-sm-4 col-xs-4">
                                                        <div class="databox databox-xlg radius-bordered databox-shadowed databox-graded">
                                                            <div class="databox-stat radius-bordered">
                                                                <div class="stat-text">趋势图</div>
                                                            </div>
                                                            <div style="width:100%" id="line3">
                                                                <!--                                                                        <div>
                                                                                                                                            <canvas id="ocanvas2" height="350" width="800"></canvas>
                                                                                                                                        </div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="horizontal-space"></div>
                                            <div class="row">
                                                <div class="col-xs-6 offset5">
                                                    <ul class="pagination">
                                                        <li class="disabled">
                                                            <a href="#"><<</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">>></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="horizontal-space"></div>
                                        </div>

                                        <div id="add" class="tab-pane">
                                            <div class="row">
                                                <div class="col-lg-2" id="myScrollspy" style="padding-top: 20px;">
                                                    <ul class="nav nav-list bs-docs-sidenav affix" data-spy="affix" data-offset-top="125" style="width: 150px">
                                                        <li><a href="#baseinfo"> 基本信息 </a></li>
                                                        <li><a href="#siteinfo"> 位置信息 </a></li>
                                                        <li><a href="#managerinfo">管理信息 </a></li>
                                                        <li><a href="#connection"> 连接情况 </a></li>
                                                        <li><a href="#document"> 文档信息 </a></li>
                                                        <li><a href="#service"> 服务方情况 </a></li>
                                                        <li><a href="#importance"> 重要性 </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-10">
                                                    <section id="baseinfo" style="padding-top: 50px">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">基本信息</span>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="form-title">基本信息填写</div>
                                                                        <div class="form-group">
                                                                            <div class="row ">
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">资产类型：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <select class="form-control">
                                                                                            <option value="">网络设备</option>
                                                                                            <option value="">安全设备</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">使用情况：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <select class="form-control">
                                                                                            <option value="">在用</option>
                                                                                            <option value="">不在用</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="horizontal-space"></div>
                                                                            <div class="row ">
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">品牌：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <input class="form-control" type="text"></input>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">型号：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <input class="form-control" type="text"></input>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="horizontal-space"></div>
                                                                            <div class="row ">
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">品牌：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <input class="form-control" type="text"></input>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 " >
                                                                                    <label class="col-lg-3 control-label">购置年月：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <input class="form-control date-picker"  id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="horizontal-space"></div>
                                                                            <div class="row ">
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">质保期：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <select class="form-control">
                                                                                            <option value="">3年</option>
                                                                                            <option value="">4年</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">维保情况：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <select class="form-control">
                                                                                            <option value="">网络设备</option>
                                                                                            <option value="">安全设备</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="horizontal-space"></div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail2">主要参数：</label>
                                                                                        <span class="input-icon icon-right">
                                                                                            <textarea class="form-control" rows="5"></textarea>
                                                                                        </span>
                                                                                        <p class="help-block">这里填写主要参数</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail2">用途：</label>
                                                                                        <span class="input-icon icon-right">
                                                                                            <textarea class="form-control" rows="5"></textarea>
                                                                                        </span>
                                                                                        <p class="help-block">这里填写用途</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="siteinfo" style="padding-top: 50px">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">位置信息</span>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="form-title">位置信息填写</div>
                                                                        <div class="form-group">
                                                                            <div class="row ">
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">机房：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <select class="form-control">
                                                                                            <option value="">A</option>
                                                                                            <option value="">B</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">机柜：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <select class="form-control">
                                                                                            <option value="">B01</option>
                                                                                            <option value="">B02</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="horizontal-space"></div>
                                                                            <div class="row ">
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">机柜位置：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <select class="form-control">
                                                                                            <option value="">22U-24U</option>
                                                                                            <option value="">25U-26U</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="horizontal-space"></div>
                                                    <section id="managerinfo" style="padding-top: 50px">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">管理信息</span>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <form id="managerinfo" class="form-horizontal">
                                                                            <div class="form-title">一些管理信息的填写</div>
                                                                            <div class="form-group">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <label class="col-lg-3 control-label">管理IP:</label>
                                                                                        <div class="col-lg-9">
                                                                                            <input class="form-control" type="text"></input>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <label class="col-lg-3 control-label">管理方式:</label>
                                                                                        <div class="col-lg-9">
                                                                                            <input class="form-control" type="text"></input>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="horizontal-space"></div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <label class="col-lg-3 control-label">管理账户:</label>
                                                                                        <div class="col-lg-9">
                                                                                            <input class="form-control" type="text"></input>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <label class="col-lg-3 control-label">联系电话:</label>
                                                                                        <div class="col-lg-9">
                                                                                            <input class="form-control" type="text"></input>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="horizontal-space"></div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <label class="col-lg-3 control-label">管理人员:</label>
                                                                                        <div class="col-lg-9">
                                                                                            <input class="form-control" type="text"></input>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <label class="col-lg-3 control-label">电子邮箱:</label>
                                                                                        <div class="col-lg-9">
                                                                                            <input class="form-control" type="text"></input>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="connection" style="padding-top: 50px">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">连接情况</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue">添加</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="form-title">连接情况填写</div>
                                                                        <div class="form-group"></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="document" style="padding-top: 50px">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">文档信息</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue">添加</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="form-title">文档信息填写</div>
                                                                        <div class="form-group">
                                                                            <div class="databox databox-xlg databox-graded databox-shadowed">
                                                                                <div class="bg-darkgray">
                                                                                    <span class="databox-text pull-left margin-top-30">
                                                                                        <ul style="list-style-type: none;float: left">
                                                                                            <li>服务方类型：集成商</li>
                                                                                            <li>1 联系人：张三</li>
                                                                                            <li>2 联系人：李四</li>
                                                                                        </ul>
                                                                                        <ul style="list-style-type: none;float: right">
                                                                                            <li>服务方名：XX信息科技有限公司 </li>
                                                                                            <li>电话：13312348989           邮箱：XX1@163.com</li>
                                                                                            <li>电话：13312348989           邮箱：XX1@163.com</li> 
                                                                                        </ul>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-lg-offset-11"style="margin-top: 120px">
                                                                                    <a class="btn btn-blue">编辑</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">文档类型：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <select class="form-control">
                                                                                            <option value="">招标文件</option>
                                                                                            <option value="">采购合同</option>
                                                                                            <option value="">维保合同</option>
                                                                                            <option value="">巡检报告</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="horizontal-space"></div>
                                                                            <div class="row ">
                                                                                <div class="col-lg-6">
                                                                                    <label class="col-lg-3 control-label">文档名称：</label>
                                                                                    <div class="col-lg-9">
                                                                                        <input class="form-control" type="text"></input>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="horizontal-space"></div>
                                                                            <div class="row ">
                                                                                <div class="col-lg-6 " >
                                                                                    <label class="col-lg-3 control-label">文档附件：</label> 
                                                                                    <div class="col-lg-9">
                                                                                        <input class="form-control"  type="text"/>
                                                                                        <div class="buttons-preview"style="margin-top: 10px">
                                                                                            <a class="btn btn-blue">添加附件</a>
                                                                                            <a  class="btn btn-blue">上传附件</a>
                                                                                            <input class="btn btn-blue" id="fileupload" type="file" name="files[]" multiple/>
                                                                                            <div id="progress" class="progress">
                                                                                                <div class="progress-bar progress-bar-success"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-offset-10 buttons-preview">
                                                                                <a class="btn btn-blue">保存</a>
                                                                                <a class="btn btn-blue">取消</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="service" style="padding-top: 50px">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">服务方情况</span>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="form-title">服务方情况填写</div>
                                                                        <div class="form-group">
                                                                            <div class="databox databox-xlg databox-graded databox-shadowed">
                                                                                <div class="bg-darkgray">
                                                                                    <span class="databox-text pull-left margin-top-30">
                                                                                        <ul style="list-style-type: none;float: left">
                                                                                            <li>文档类型：招标文件</li>
                                                                                            <li>文档附件：附件</li>
                                                                                        </ul>
                                                                                        <ul style="list-style-type: none;float: right">
                                                                                            <li>文档名称： XXX项目XX招标文件 </li>
                                                                                        </ul>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-lg-offset-11"style="margin-top: 120px">
                                                                                    <a class="btn btn-blue">编辑</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget ">
                                                                            <div class="widget-body">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <label class="col-lg-3 control-label">服务方类型：</label>
                                                                                        <div class="col-lg-9">
                                                                                            <select class="form-control">
                                                                                                <option value="">A</option>
                                                                                                <option value="">B</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="horizontal-space"></div>
                                                                                <div class="row ">
                                                                                    <div class="col-lg-6">
                                                                                        <label class="col-lg-3 control-label">服务方名称：</label>
                                                                                        <div class="col-lg-9">
                                                                                            <input class="form-control" type="text"></input>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="horizontal-space"></div>
                                                                                <div class="row ">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="databox databox-xlg databox-graded databox-shadowed">
                                                                                            <div class="row">
                                                                                                <label class="col-lg-3 control-label"style="margin-left: 20px">联系人：</label>
                                                                                                <a class="btn btn-blue">增加联系人</a>
                                                                                                <div class="col-lg-6"style="margin-top: 10px">
                                                                                                    <input class="form-control" type="text"placeholder="姓名"></input>
                                                                                                    <input class="form-control" type="text"placeholder="电话"></input>
                                                                                                    <input class="form-control" type="text"placeholder="邮箱"></input>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-offset-8 buttons-preview"style="margin-top: 20px">
                                                                                                <a class="btn btn-blue">保存</a>
                                                                                                <a class="btn btn-blue">取消</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-offset-10 buttons-preview">
                                                                                    <a class="btn btn-blue">保存</a>
                                                                                    <a class="btn btn-blue">取消</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="importance" style="padding-top: 50px">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">重要性</span>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="form-title">重要性填写</div>
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail2">异常影响：</label>
                                                                                        <span class="input-icon icon-right">
                                                                                            <textarea class="form-control" rows="5"></textarea>
                                                                                        </span>
                                                                                        <div class="col-lg-offset-10 buttons-preview">
                                                                                            <a class="btn btn-blue">保存</a>
                                                                                            <a class="btn btn-blue">取消</a>
                                                                                        </div>
                                                                                        <label for="exampleInputEmail2">重要性级别：</label>
                                                                                        <input id="input-id" type="number" class="rating" min=0 max=5 step=0.5 data-size="lg" >
                                                                                            <div class="col-lg-offset-10 buttons-preview">
                                                                                                <a class="btn btn-blue">保存</a>
                                                                                                <a class="btn btn-blue">取消</a>
                                                                                            </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        </div>
        <!-- Main Container -->

        <!--Basic Scripts-->

        <script src="../script/jquery-1.8.3.js"></script>
        <script src="../script/jquery-ui-1.9.2.min.js"></script>
        <script src="../script/jquery.ui.touch-punch-0.2.2.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>

        <!--Beyond Scripts-->
        <script src="../assets/js/beyond.min.js"></script>

        <!--Page Related Scripts-->
        <script src="../script/highcharts/highcharts.js" type="text/javascript"></script>
        <script src="../script/highcharts/grid.js" type="text/javascript"></script>
        <script src="../assets/js/charts/sparkline/jquery.sparkline.js"></script>
        <script src="../assets/js/charts/sparkline/sparkline-init.js"></script>
        <script src="../assets/js/star-rating.min.js"></script>
        <script src="../assets/js/Chart.min.js"></script>
        <script src="../script/list-chart.js"></script>
        <script>
            $("#input-id").rating();
            InitiateSparklineCharts.init();
            $('#myTab a:first').tab('show');//初始化显示哪个tab 

            $('#myTab a').click(function (e) {
                e.preventDefault();//阻止a链接的跳转行为
                $(this).tab('show');//显示当前选中的链接及关联的content
                creatLine2("canvas0", "canvas1", "canvas2");
                creatLine("canvas3", "canvas4", "canvas5");
                //getLineData();
            });
        </script>
    </body>
    <!--  /Body -->
</html>
