<!DOCTYPE html>

<html>
    <!-- Head -->
    <head>
        <meta charset="utf-8" />
        <title>单资产展示</title>
        <meta name="description" content="index" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon"/>
        <!--Basic Styles-->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../assets/css/weather-icons.min.css" rel="stylesheet" />
        <!--        <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" />-->
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
    <body data-spy="scroll" data-target="#myScrollspy1">
        <?php include 'header.php'; ?>
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
                                            <div class="searchhelper">搜索 Reports, Charts, Emails or Notifications</div>
                                        </div>-->
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
                        <li class="active">
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon fa fa-desktop "></i>
                                <span class="menu-text"> 单资产展示 </span>
                            </a>
                        </li>
                        <!--    业务管理
                            <li class="_application">
                                <a href="#">
                                    <i class="menu-icon glyphicon glyphicon-tasks"></i>
                                    <span class="menu-text"> 服务方管理 </span>
                                </a>
                            </li>
                            链路管理
                            <li class="_link">
                                <a href="#" >
                                    <i class="menu-icon glyphicon glyphicon-link"></i>
                                    <span class="menu-text">
                                        资产仿真管理
                                    </span>
    
                                </a>
                            </li>
                            网页管理
                            <li class="_home">
                                <a href="#">
                                    <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                                    <span class="menu-text"> 文档管理</span>
                                </a>
                            </li>
                            业务路径
                            <li class="_applink">
                                <a href="#">
                                    <i class="menu-icon glyphicon glyphicon-transfer"></i>
                                    <span class="menu-text"> 业务路径 </span>
                                </a>
    
                            </li>
                            报表中心
                            <li class="_report">
                                <a href="#">
                                    <i class="menu-icon fa fa-bar-chart-o"></i>
                                    <span class="menu-text"> 报表中心 </span>
                                </a>
    
                            </li>
                            告警中心
                            <li class="_alarm">
                                <a href="#">
                                    <i class="menu-icon fa fa-envelope-o"></i>
                                    <span class="menu-text"> 告警中心 </span>
                                </a>
                            </li>-->
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
                            <li>资产管理</li>
                            <li class="active">单资产展示</li>
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
                                    资产总览
                                </small>
                                <small>
                                    <i class="fa fa-angle-right"></i>
                                    单资产
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
                        <!--Header Buttons End-->
                    </div>
                    <!-- /Page Header -->
                    <!-- Page Body -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget radius-bordered">
                                    <div class="widget-header">
                                        <span class="widget-caption">资产标签</span>
                                        <div class="widget-buttons">
                                            <button class="btn btn-blue">打印标签</button>
                                            <button class="btn btn-blue">导出标签</button>
                                        </div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="databox-text pull-left no-margin">
                                                    <ul style="list-style-type: none;">
                                                        <li id="ppinfo_num0"></li>
                                                        <li id="ppinfo_type0"></li>
                                                        <li id="ppinfo_ip0"></li>	
                                                        <li id="ppinfo_site0"></li>
                                                        <li>（可导出/打印的资产标签）</li>
                                                    </ul>                                             
                                                </span>
                                                <div class="col-lg-offset-10">
                                                    <img src="../images/qrCode.png" class="img-responsive" style="width: 120px;height: 120px">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tabbable">
                                    <ul id="myTab" class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#run" data-toggle="tab">资产运行</a>
                                        </li>
                                        <li class="tab-red">
                                            <a href="#manager" data-toggle="tab">资产管理</a>
                                        </li>
                                        <li class="tab-green">
                                            <a href="#event" data-toggle="tab">资产事件</a>
                                        </li>
                                    </ul><!--三个tab-->

                                    <div class="tab-content">
                                        <div id="run"class="tab-pane active">
                                            <!--                                            <div class="row">
                                                                                            <div class="col-lg-2"  id="myScrollspy">
                                                                                                <ul class="nav nav-list bs-docs-sidenav affix" data-spy="affix" data-offset-top="125" style="width: 150px">
                                                                                                    <li><a href="#hardware"> 硬件告警 </a></li>
                                                                                                    <li><a href="#cpu"> CPU/MEM </a></li>
                                                                                                    <li><a href="#flow">流量 </a></li>
                                                                                                    <li><a href="#block"> 通断 </a></li>
                                                                                                    <li><a href="#important"> 重要性 </a></li>
                                                                                                </ul>
                                                                                            </div>-->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <section id="hardware">
                                                        <div class="horizontal-space"></div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">硬件告警</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue">编辑</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row">
                                                                            <span class="databox-text pull-left margin-top-30">
                                                                                <ul style="list-style-type: none;float: left">
                                                                                    <li>品牌：SJ-A-B01-WL-002</li>
                                                                                    <li>版本：网络设备</li>
                                                                                    <li>购置年月：2013年9月</li>	
                                                                                    <li>用途：互联网接入交换机</li>
                                                                                </ul>
                                                                                <ul style="list-style-type: none;float: right">
                                                                                    <li>型号：SJ-A-B01-WL-002</li>
                                                                                    <li>主要参数：</li>
                                                                                    <li>维保情况：2013.9.1-2015.8.30</li>	
                                                                                    <li>使用情况：在用</li>
                                                                                </ul>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!--一个标签-->
                                                        </div>
                                                    </section>
                                                    <section id="cpu">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">CPU/MEM</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue" href='#modal' data-toggle="modal">编辑</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row" id="insert_chart">
                                                                            <div class="col-lg-12">
                                                                                <div class="databox databox-xlg databox-graded databox-shadowed " id="cpu0">
                                                                                    <div class="databox-stat radius-bordered">
                                                                                        <div class="stat-text">cpu0号趋势图</div>
                                                                                    </div>
                                                                                    <div style="width:100%">
                                                                                        <div>
                                                                                            <canvas id="canvas0" height="100" width="800"></canvas>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <div class="databox databox-xlg databox-graded databox-shadowed "id="cpu1">
                                                                                    <div class="databox-stat radius-bordered">
                                                                                        <div class="stat-text">cpu1号趋势图</div>
                                                                                    </div>
                                                                                    <div style="width:100%">
                                                                                        <div>
                                                                                            <canvas id="canvas1" height="100" width="800"></canvas>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!--两个表格-->
                                                    </section>
                                                    <section id="flow">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">流量</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue" href='#modal2' data-toggle="modal">编辑</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row" id="insert_fchart">
                                                                            <div class="col-lg-12">
                                                                                <div class="databox databox-xlg databox-graded databox-shadowed "id="Flow0">
                                                                                    <div class="databox-stat radius-bordered">
                                                                                        <div class="stat-text">Flow0号趋势图</div>
                                                                                    </div>
                                                                                    <div style="width:100%">
                                                                                        <div>
                                                                                            <canvas id="canvas2" height="100" width="800"></canvas>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <div class="databox databox-xlg databox-graded databox-shadowed "id="Flow1">
                                                                                    <div class="databox-stat radius-bordered">
                                                                                        <div class="stat-text">Flow1号趋势图</div>
                                                                                    </div>
                                                                                    <div style="width:100%">
                                                                                        <div>
                                                                                            <canvas id="canvas3" height="100" width="800"></canvas>
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
                                                    <div id="modal" class="modal fade in" style="display: none;margin-top: 250px;">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-lg-offset-5">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">选择趋势图</span>
                                                                        <div class="widget-buttons">
                                                                            <a class="close" data-dismiss="modal">X</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <span class="text">选择两个视图</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top: 20px">
                                                                            <ul>
                                                                                <li style="list-style-type: none;">
                                                                                    <div class="task-check">
                                                                                        <label>
                                                                                            <input type="checkbox" class="input-lg" id="Cpu0">
                                                                                            <span class="text">cpu0</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </li>
                                                                                <li style="list-style-type: none;">
                                                                                    <div class="task-check">
                                                                                        <label>
                                                                                            <input type="checkbox" class="input-lg" id="Cpu1">
                                                                                            <span class="text">cpu1</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </li>
                                                                                <li style="list-style-type: none;">
                                                                                    <div class="task-check">
                                                                                        <label>
                                                                                            <input type="checkbox" class="input-lg" id="Cmem0">
                                                                                            <span class="text">内存0</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </li>
                                                                                <li style="list-style-type: none;">
                                                                                    <div class="task-check">
                                                                                        <label>
                                                                                            <input type="checkbox" class="input-lg" id="Cmem1">
                                                                                            <span class="text">内存1</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-xs-3" style="margin-left: 20px">
                                                                                <a id="ok" class="btn btn-blue" href="javascript:setChart();">确定</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="modal2" class="modal fade in" style="display: none;margin-top: 250px;">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-lg-offset-5">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">选择趋势图</span>
                                                                        <div class="widget-buttons">
                                                                            <a class="close" data-dismiss="modal">X</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <span class="text">选择两个视图</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top: 20px">
                                                                            <ul>
                                                                                <li style="list-style-type: none;">
                                                                                    <div class="task-check">
                                                                                        <label>
                                                                                            <input type="checkbox" class="input-sm" id="flow0">
                                                                                            <span class="text">流量0</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </li>
                                                                                <li style="list-style-type: none;">
                                                                                    <div class="task-check">
                                                                                        <label>
                                                                                            <input type="checkbox" class="input-sm" id="flow1">
                                                                                            <span class="text">流量1</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </li>
                                                                                <li style="list-style-type: none;">
                                                                                    <div class="task-check">
                                                                                        <label>
                                                                                            <input type="checkbox" class="input-sm" id="flow2">
                                                                                            <span class="text">流量2</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </li>
                                                                                <li style="list-style-type: none;">
                                                                                    <div class="task-check">
                                                                                        <label>
                                                                                            <input type="checkbox" class="input-sm" id="flow3">
                                                                                            <span class="text">流量3</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-xs-3" style="margin-left: 20px">
                                                                                <a id="ok" class="btn btn-blue" href="javascript:setflowChart();">确定</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section id="block">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h6 class="row-title before-azure">通断</h6>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="importance">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h6 class="row-title before-azure">重要性</h6>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="manager"class="tab-pane">
                                            <!--                                            <div class="row">
                                                                                            <div class="col-lg-2" id="myScrollspy1">
                                                                                                <ul class="nav nav-list bs-docs-sidenav affix" data-spy="affix" data-offset-top="125" style="width: 150px">
                                                                                                    <li><a href="#baseinfo"> 基本信息 </a></li>
                                                                                                    <li><a href="#siteinfo"> 位置信息 </a></li>
                                                                                                    <li><a href="#managerinfo">管理信息 </a></li>
                                                                                                    <li><a href="#connection"> 连接情况 </a></li>
                                                                                                    <li><a href="#document"> 文档信息 </a></li>
                                                                                                    <li><a href="#service"> 服务方情况 </a></li>
                                                                                                    <li><a href="#importance">资产重要性 </a></li>
                                                                                                </ul>
                                                                                            </div>-->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <section id="baseinfo">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">基本信息</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue">编辑</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row">
                                                                            <span class="databox-text pull-left margin-top-30">
                                                                                <ul style="list-style-type: none;float: left">
                                                                                    <li>品牌：SJ-A-B01-WL-002</li>
                                                                                    <li>版本：网络设备</li>
                                                                                    <li>购置年月：2013年9月</li>	
                                                                                    <li>用途：互联网接入交换机</li>
                                                                                </ul>
                                                                                <ul style="list-style-type: none;float: right">
                                                                                    <li>型号：SJ-A-B01-WL-002</li>
                                                                                    <li>主要参数：</li>
                                                                                    <li>维保情况：2013.9.1-2015.8.30</li>	
                                                                                    <li>使用情况：在用</li>
                                                                                </ul>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="siteinfo">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">位置信息</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue">编辑</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row">
                                                                            <span class="databox-text pull-left margin-top-30">
                                                                                <ul style="list-style-type: none;float: left">
                                                                                    <li>品牌：SJ-A-B01-WL-002</li>
                                                                                    <li>版本：网络设备</li>
                                                                                    <li>购置年月：2013年9月</li>	
                                                                                    <li>用途：互联网接入交换机</li>
                                                                                </ul>
                                                                                <ul style="list-style-type: none;float: right">
                                                                                    <li>型号：SJ-A-B01-WL-002</li>
                                                                                    <li>主要参数：</li>
                                                                                    <li>维保情况：2013.9.1-2015.8.30</li>	
                                                                                    <li>使用情况：在用</li>
                                                                                </ul>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="managerinfo">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">管理信息</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue">编辑</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row">
                                                                            <span class="databox-text pull-left margin-top-30">
                                                                                <ul style="list-style-type: none;float: left">
                                                                                    <li>品牌：SJ-A-B01-WL-002</li>
                                                                                    <li>版本：网络设备</li>
                                                                                    <li>购置年月：2013年9月</li>	
                                                                                    <li>用途：互联网接入交换机</li>
                                                                                </ul>
                                                                                <ul style="list-style-type: none;float: right">
                                                                                    <li>型号：SJ-A-B01-WL-002</li>
                                                                                    <li>主要参数：</li>
                                                                                    <li>维保情况：2013.9.1-2015.8.30</li>	
                                                                                    <li>使用情况：在用</li>
                                                                                </ul>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="connection">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">连接情况</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue">编辑</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row">
                                                                            <span class="databox-text pull-left margin-top-30">
                                                                                <ul style="list-style-type: none;float: left">
                                                                                    <li>品牌：SJ-A-B01-WL-002</li>
                                                                                    <li>版本：网络设备</li>
                                                                                    <li>购置年月：2013年9月</li>	
                                                                                    <li>用途：互联网接入交换机</li>
                                                                                </ul>
                                                                                <ul style="list-style-type: none;float: right">
                                                                                    <li>型号：SJ-A-B01-WL-002</li>
                                                                                    <li>主要参数：</li>
                                                                                    <li>维保情况：2013.9.1-2015.8.30</li>	
                                                                                    <li>使用情况：在用</li>
                                                                                </ul>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="document">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">文档信息</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue">编辑</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row">
                                                                            <span class="databox-text pull-left margin-top-30">
                                                                                <ul style="list-style-type: none;float: left">
                                                                                    <li>品牌：SJ-A-B01-WL-002</li>
                                                                                    <li>版本：网络设备</li>
                                                                                    <li>购置年月：2013年9月</li>	
                                                                                    <li>用途：互联网接入交换机</li>
                                                                                </ul>
                                                                                <ul style="list-style-type: none;float: right">
                                                                                    <li>型号：SJ-A-B01-WL-002</li>
                                                                                    <li>主要参数：</li>
                                                                                    <li>维保情况：2013.9.1-2015.8.30</li>	
                                                                                    <li>使用情况：在用</li>
                                                                                </ul>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="service">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">服务方情</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue">编辑</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row">
                                                                            <span class="databox-text pull-left margin-top-30">
                                                                                <ul style="list-style-type: none;float: left">
                                                                                    <li>服务方1： 公司名   联系人： 联系电话   邮件</li>
                                                                                    <li>服务方2： 公司名   联系人： 联系电话   邮件</li>
                                                                                    <li>服务方3： 公司名   联系人： 联系电话   邮件</li>	
                                                                                    <li>服务方4： 公司名   联系人： 联系电话   邮件</li>
                                                                                </ul>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section id="importance">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="widget radius-bordered">
                                                                    <div class="widget-header">
                                                                        <span class="widget-caption">资产重要性</span>
                                                                        <div class="widget-buttons">
                                                                            <button class="btn btn-blue">编辑</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <span class="databox-text pull-left margin-top-30">
                                                                                    <ul style="list-style-type: none;float: left">
                                                                                        <li>异常影响范围</li>
                                                                                        <li>机柜位置：A01-12U</li>
                                                                                    </ul>
                                                                                </span>
                                                                            </div>
                                                                            <div class="col-lg-offset-3">
                                                                                <input id="input-id" type="number" class="rating" min=0 max=5 step=0.5 data-size="lg" >
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
                                        <div id="event"class="tab-pane">
                                            <ul class="timeline">
                                                <li class="timeline-node">
                                                    <a class="btn btn-palegreen">现在</a>
                                                </li>
                                                <li>
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            8:19
                                                        </span>
                                                        <span class="timeline-date">今天</span>
                                                    </div>
                                                    <div class="timeline-badge blue">
                                                        <i class="fa fa-tag"></i>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <span class="timeline-title">
                                                                巡检报告2014.9.8
                                                            </span>
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">今天</span>
                                                                    -
                                                                    <span class="timeline-time">8:19</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>巡检报告2014.9.8</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-inverted">
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            3:10
                                                        </span><span class="timeline-date">今天</span>
                                                    </div>
                                                    <div class="timeline-badge darkorange">
                                                        <i class="fa fa-map-marker font-120"></i>
                                                    </div>
                                                    <div class="timeline-panel bordered-right-3 bordered-orange">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <span class="timeline-title">

                                                            </span>
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">今天</span>
                                                                    -
                                                                    <span class="timeline-time">3:10</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p></p>
                                                            <p>
                                                                <i class="orange fa fa-exclamation"></i> 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-node">
                                                    <a class="btn btn-yellow">昨天</a>
                                                </li>
                                                <li>
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            8:19
                                                        </span><span class="timeline-date">昨天</span>
                                                    </div>
                                                    <div class="timeline-badge sky">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                    <div class="timeline-panel bordered-top-3 bordered-azure">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <span class="timeline-title">
                                                                巡检报告2015.9.8
                                                            </span>
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">昨天</span>
                                                                    -
                                                                    <span class="timeline-time">8:19</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>
                                                                巡检报告巡检报告巡检报告巡检报告巡检报告
                                                            </p>
                                                            2333
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-inverted">
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            6:08
                                                        </span><span class="timeline-date">昨天</span>
                                                    </div>
                                                    <div class="timeline-badge sky">
                                                        <!--这里可以添加图标-->
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <span class="timeline-title">
                                                                <!--这里可以添加标题-->
                                                            </span>
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">昨天</span>
                                                                    -
                                                                    <span class="timeline-time">6:08</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>
                                                                巡检报告2014.9.8
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            7:00
                                                        </span><span class="timeline-date">昨天</span>
                                                    </div>
                                                    <div class="timeline-badge danger">
                                                        <i class="fa fa-exclamation font-120"></i>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <span class="timeline-title danger">
                                                                <!--这里可以添加标题-->
                                                            </span>
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">昨天</span>
                                                                    -
                                                                    <span class="timeline-time">7:00</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>新增服务方：安徽三实</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-inverted">
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            3:09
                                                        </span><span class="timeline-date">昨天</span>
                                                    </div>
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-picture-o darkpink"></i>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">昨天</span>
                                                                    -
                                                                    <span class="timeline-time">3:09</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                                                <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                                            </div>
                                                            <i class="text-muted text-sm">设备离线告警，下单</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-node" id="timeline1_btn">
                                                    <a class="btn btn-info" href="javascript:test();">更多事件</a>
                                                </li>
                                            </ul>
                                            <ul class="timeline" style="display: none" id="timeline2">
                                                <li>
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            8:19
                                                        </span>
                                                        <span class="timeline-date">今天</span>
                                                    </div>
                                                    <div class="timeline-badge blue">
                                                        <i class="fa fa-tag"></i>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <span class="timeline-title">
                                                                巡检报告2014.9.8
                                                            </span>
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">今天</span>
                                                                    -
                                                                    <span class="timeline-time">8:19</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>巡检报告2014.9.8</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-inverted">
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            3:10
                                                        </span><span class="timeline-date">今天</span>
                                                    </div>
                                                    <div class="timeline-badge darkorange">
                                                        <i class="fa fa-map-marker font-120"></i>
                                                    </div>
                                                    <div class="timeline-panel bordered-right-3 bordered-orange">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <span class="timeline-title">

                                                            </span>
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">今天</span>
                                                                    -
                                                                    <span class="timeline-time">3:10</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p></p>
                                                            <p>
                                                                <i class="orange fa fa-exclamation"></i> 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-node">
                                                    <a class="btn btn-yellow">昨天</a>
                                                </li>
                                                <li>
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            8:19
                                                        </span><span class="timeline-date">昨天</span>
                                                    </div>
                                                    <div class="timeline-badge sky">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                    <div class="timeline-panel bordered-top-3 bordered-azure">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <span class="timeline-title">
                                                                巡检报告2015.9.8
                                                            </span>
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">昨天</span>
                                                                    -
                                                                    <span class="timeline-time">8:19</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>
                                                                巡检报告巡检报告巡检报告巡检报告巡检报告
                                                            </p>
                                                            2333
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-inverted">
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            6:08
                                                        </span><span class="timeline-date">昨天</span>
                                                    </div>
                                                    <div class="timeline-badge sky">
                                                        <!--这里可以添加图标-->
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <span class="timeline-title">
                                                                <!--这里可以添加标题-->
                                                            </span>
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">昨天</span>
                                                                    -
                                                                    <span class="timeline-time">6:08</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>
                                                                巡检报告2014.9.8
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            7:00
                                                        </span><span class="timeline-date">昨天</span>
                                                    </div>
                                                    <div class="timeline-badge danger">
                                                        <i class="fa fa-exclamation font-120"></i>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <span class="timeline-title danger">
                                                                <!--这里可以添加标题-->
                                                            </span>
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">昨天</span>
                                                                    -
                                                                    <span class="timeline-time">7:00</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>新增服务方：安徽三实</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-inverted">
                                                    <div class="timeline-datetime">
                                                        <span class="timeline-time">
                                                            3:09
                                                        </span><span class="timeline-date">昨天</span>
                                                    </div>
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-picture-o darkpink"></i>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-header bordered-bottom bordered-blue">
                                                            <p class="timeline-datetime">
                                                                <small class="text-muted">
                                                                    <i class="glyphicon glyphicon-time">
                                                                    </i>
                                                                    <span class="timeline-date">昨天</span>
                                                                    -
                                                                    <span class="timeline-time">3:09</span>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                                                <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                                            </div>
                                                            <i class="text-muted text-sm">设备离线告警，下单</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-node">
                                                    <a class="btn btn-info">更多事件</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!--三个tab内容-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-offset-10 buttons-preview"style="margin-top: 20px">
                                <a class="btn btn-blue">导出资产表</a>
                                <a class="btn btn-blue">打印资产表</a>
                            </div>
                        </div>
                        <!-- /Page Container -->

                        <!-- Main Container -->

                        <!--Basic Scripts-->

                        <script src="../script/jquery-1.8.3.js"></script>
                        <script src="../script/jquery-ui-1.9.2.min.js"></script>
                        <script src="../script/jquery.ui.touch-punch-0.2.2.min.js"></script>
                        <script src="../assets/js/bootstrap.min.js"></script>

                        <!--Beyond Scripts-->
                        <script src="../assets/js/beyond.min.js"></script>

                        <!--Page Related Scripts-->

                        <script src="../assets/js/charts/sparkline/jquery.sparkline.js"></script>
                        <script src="../assets/js/charts/sparkline/sparkline-init.js"></script>
                        <script src="../assets/js/Chart.min.js"></script>
                        <script src="../assets/js/select2/select2.js"></script>
                        <script src="../assets/js/star-rating.min.js"></script>
                        <script src="../script/single-chart.js"></script>
                        <script>
                            InitiateSparklineCharts.init();
                            //start rating
                            $("#input-id").rating();
                            function test() {
                                document.getElementById("timeline1_btn").style.display = 'none';
                                document.getElementById("timeline2").style.display = '';
                            }
                        </script>
                    </div>

                    </body>
                    <!--  /Body -->
                    </html>
