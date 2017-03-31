<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- Head -->
    <head>
        <meta charset="utf-8" />
        <title>趋势图</title>
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

        <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
        <script src="../assets/js/skins.min.js"></script>
    </head>
    <!-- /Head -->
    <!-- Body -->
    <body>
        <?php include '../views/header.php'; ?>
        <!-- Main Container -->
        <div class="main-container container-fluid">
            <!-- Page Container -->
            <div class="page-container">
                <!-- Page Sidebar -->
                <div class="page-sidebar " id="sidebar">

                    <!-- Page Sidebar Header-->
                    <div class="sidebar-header-wrapper">
                        <input type="text" class="searchinput" />
                        <i class="searchicon fa fa-search"></i>
                        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                    </div>
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
                        <li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon fa fa-desktop "></i>
                                <span class="menu-text"> 信息资产管理 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="#" >
                                        <i class="menu-icon glyphicon glyphicon-home"></i>
                                        <span class="menu-text"> 资产总览 </span>
                                    </a>
                                </li>

                                <li  class="active">
                                    <a href="#" class="menu-dropdown">
                                        <i class="menu-icon fa fa-th"></i>
                                        <span class="menu-text"> 资产列表</span>
                                        <i class="menu-expand"></i>
                                    </a>
                                    <ul class="submenu" style="display: block;">
                                        <li>
                                            <a href="list.php">
                                                <i class="menu-icon glyphicon glyphicon-tasks"></i>
                                                <span class="menu-text"> 网络资产 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="menu-icon glyphicon glyphicon-tasks"></i>
                                                <span class="menu-text"> 主机资产 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="menu-icon glyphicon glyphicon-tasks"></i>
                                                <span class="menu-text"> 安全资产 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="menu-icon glyphicon glyphicon-tasks"></i>
                                                <span class="menu-text"> 储存资产 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="menu-dropdown">
                                        <i class="menu-icon fa fa-desktop"></i>
                                        <span class="menu-text"> 资产报表 </span>
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
                                <span class="menu-text"> 服务方管理 </span>
                            </a>
                        </li>
                        <!--链路管理-->
                        <li class="_link">
                            <a href="#" >
                                <i class="menu-icon glyphicon glyphicon-link"></i>
                                <span class="menu-text">
                                    资产仿真管理
                                </span>

                            </a>
                        </li>
                        <!--网页管理-->
                        <li class="_home">
                            <a href="#">
                                <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                                <span class="menu-text"> 文档管理</span>
                            </a>
                        </li>
                        <!--业务路径-->
                        <li class="_applink">
                            <a href="#">
                                <i class="menu-icon glyphicon glyphicon-transfer"></i>
                                <span class="menu-text"> 业务路径 </span>
                            </a>

                        </li>
                        <!--报表中心-->
                        <li class="_report">
                            <a href="#">
                                <i class="menu-icon fa fa-bar-chart-o"></i>
                                <span class="menu-text"> 报表中心 </span>
                            </a>

                        </li>
                        <!--告警中心-->
                        <li class="_alarm active">
                            <a href="alert.php">
                                <i class="menu-icon fa fa-envelope-o"></i>
                                <span class="menu-text"> 告警中心 </span>
                            </a>
                        </li>

                        <!--系统设置-->
                        <li class="_system">
                            <a href="#">
                                <i class="menu-icon glyphicon glyphicon-cog"></i>
                                <span class="menu-text"> 系统设置 </span>
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
                                <a href="#">首页</a>
                            </li>
                            <li>
                                <a href="alert.php">告警中心</a>
                            </li>
                            <li class="active">趋势图</li>
                        </ul>
                    </div>
                    <!-- /Page Breadcrumb -->
                    <!-- Page Header -->
                    <div class="page-header position-relative">
                        <div class="header-title">
                            <h1>
                                首页
                                <small>
                                    <a class="fa fa-angle-right"></a>
                                    告警中心
                                </small>
                                <small>
                                    <i class="fa fa-angle-right"></i>
                                    趋势图
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
                                        <span class="widget-caption">网络设备趋势图</span>
                                    </div>
                                    <div class="widget-body">
                                        <div class="row">
                                            <canvas id="canvas" height="200" width="800"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /Page Body -->
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
        <script src="../assets/js/Chart.min.js"></script>
        <script>
            InitiateSparklineCharts.init();
            var randomScalingFactor = function () {
                return Math.round(Math.random() * 100)
            };
            var randomColorFactor = function () {
                return Math.round(Math.random() * 255)
            };
            var lineChartData = {
                labels: ["一月", "二月", "三月", "四月", "五月", "六月", "七月"],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                    }
                ]

            }

            window.onload = function () {
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myLine = new Chart(ctx).Line(lineChartData, {
                    responsive: true
                });
            }

        </script>
    </body>
    <!--  /Body -->
</html>


