<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
  <meta name="generator" content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
  <meta charset="utf-8" />

  <title>学生信息管理系统</title>
  <meta name="description" content="index" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/x-icon" /><!--Basic Styles-->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" />
  <link href="../../assets/css/weather-icons.min.css" rel="stylesheet" /><!--Fonts-->
  <!--Beyond styles-->
  <link href="../../assets/css/beyond.min.css" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/demo.min.css" rel="stylesheet" />
  <link href="../../assets/css/typicons.min.css" rel="stylesheet" />
  <link href="../../assets/css/animate.min.css" rel="stylesheet" />
  <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->

  <script src="../../assets/js/skins.min.js"></script>
  <script src="../../assets/js/jquery-3.2.0.min.js"></script>
  <script src="../../assets/js/skins.min.js"></script>
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
        
		<div class="col-xs-12" style="margin-top:5%">
                            <div class="well with-header with-footer">
                                <div class="header bg-palegreen">
                                    学生信息表
                                </div>
                                <table class="table table-hover table-striped table-bordered">
                                    <thead class="bordered-blueberry">
                                        <tr>
                                            <th>
                                                学号
                                            </th>
                                            <th>
                                                姓名
                                            </th>
                                            <th>
                                                班级
                                            </th>
                                            <th>
                                                辅导员
                                            </th>
											<th>
                                                手机号
                                            </th>
											<th>
                                                QQ号
                                            </th>
											<th>
                                                操作
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="student_table_all">
                                        
                                    </tbody>
                                </table>
								<div style="margin-top:5%" id="pagination">
                                    
                                </div>
                                <div class="footer">
                                    <code>学生信息表，点击可以查看更多信息</code>
                                </div>
                            </div>
                        </div>
		
		<div class="col-xs-12" id="show_info" style="position: absolute;top: 0;display: none;padding: 5%;left: 0;right: 0;bottom: 0;">
                                    <div class="widget">
                                        <div class="widget-header bg-blue">
                                            <span class="widget-caption">详细信息</span>
                                            <div class="widget-buttons">
                                                <a href="#" onclick="javascript:$('#show_info').hide();">
                                                    <i class="">x</i>
                                                </a>
                                            </div><!--Widget Buttons-->
                                        </div><!--Widget Header-->
                                        <div class="widget-body" style="display: block; height: auto;">
                                            <?php include '../info.php'; ?>
                                        </div><!--学生信息-->
                                    </div><!--Widget-->
                                </div>
								
		</div><!-- /Page Body -->
		
		
	  </div>
    
	</div><!-- /Page Content -->
	
	
	
  </div><!--Basic Scripts--> 
   <script src="../../assets/js/bootstrap.min.js">
</script> <!--Beyond Scripts-->
   <script src="../../assets/js/beyond.min.js">
</script> <!--Page Related Scripts-->
   <script src="../../assets/js/base.js"></script>
   <script src="../../assets/js/index_t.js"></script>
</body>
</html>
