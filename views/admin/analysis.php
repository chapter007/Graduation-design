<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
  <meta name="generator" content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
  <meta charset="utf-8" />

  <title>学生信息分析系统</title>
  <meta name="description" content="index" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/x-icon" /><!--Basic Styles-->
 
  <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" />
  <link href="../../assets/css/weather-icons.min.css" rel="stylesheet" /><!--Fonts-->
  <!--Beyond styles-->
  <link href="../../assets/css/beyond.min.css" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/demo.min.css" rel="stylesheet" />
  <link href="../../assets/css/typicons.min.css" rel="stylesheet" />
  <link href="../../assets/css/animate.min.css" rel="stylesheet" />
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  
  <script src="../../assets/js/jquery-3.2.0.min.js"></script>
  <script src="../../assets/js/skins.min.js"></script>
  <script src="../../assets/js/echarts.js"></script>
  
</head><!-- /Head -->
<!-- Body -->

<body>
  <?php include '../header.php'; ?><!-- Main Container -->

  <div class="main-container container-fluid">
    <!-- Page Container -->

    <div class="page-container">
      <!-- Page Content -->

      <div class="page-content" style="margin-left: 0;">
        <div class="page-body">
			<div class="col-xs-12" id="show_info" style="position: absolute;top: 0;display: none;padding: 5%;left: 0;right: 0;bottom: 0;">
                                    <div class="widget">
                                        <div class="widget-header bg-blue">
                                            <span class="widget-caption">详细信息</span>
                                            <div class="widget-buttons">
                                                <a href="#" onclick="javascript:$('#show_info').hide();">
                                                    <i class="">x</i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="widget-body" style="display: block; height: auto;">
                                            <?php include '../info.php'; ?>
                                        </div><!--学生信息-->
                                    </div>
            </div>
			<!-- Split button -->
			<div class="btn-group" style="margin-top:5%">
			  <button type="button" class="btn btn-danger" id="title">作业完成情况</button>
			  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a onclick="chart_option(0)" id="homework">作业完成情况</a></li>
				<li><a onclick="chart_option(1)" id="attend">出勤情况</a></li>
				<li><a onclick="chart_option(2)" id="nightlearning">晚自习情况</a></li>
				<li><a onclick="chart_option(3)" id="librarylend">图书借阅情况</a></li>
				<li><a onclick="chart_option(4)" id="generalfeel">学习总体感觉</a></li>
				<li role="separator" class="divider"></li>
				<li><a onclick="chart_option(5)" id="playgame">玩游戏情况</a></li>
			  </ul>
			</div>
			
			<!--学生信息统计分析，学生有哪些值得统计的情况？-->
			<!--学生信息中有，作业情况，出勤情况，晚自习情况，玩游戏情况，图书借阅情况，学习总体感觉，感觉最难的，剩下的几个就算了-->
			<!--以什么样的方式展示，因为每个情况都只有三种以内的状态，考虑用饼状图-->
			<div id="main" style="width: 600px;height:400px;margin-left:auto;margin-right:auto;text-alian:center;margin-top:10%"></div>
		</div>
		
	  </div>
    
	</div>
	
	
  </div><!--Basic Scripts--> 
   <script src="../../assets/js/bootstrap.min.js"></script>
   <script src="../../assets/js/beyond.min.js"></script>
   <!--Page Related Scripts-->
   <script src="../../assets/js/base.js"></script>
   <script src="../../assets/js/analysis.js"></script>
</body>
</html>
