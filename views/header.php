<!--旋转等待-->
<div class="loading-container">
    <div class="loading-progress">
        <div class="rotator">
            <div class="rotator">
                <div class="rotator colored">
                    <div class="rotator">
                        <div class="rotator colored">
                            <div class="rotator colored"></div>
                            <div class="rotator"></div>
                        </div>
                        <div class="rotator colored"></div>
                    </div>
                    <div class="rotator"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
        <div class="rotator"></div>
    </div>
</div>

<!--bootstrap原生的导航条修改-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#000;padding:10px;margin-top:6px">学生信息采集系统</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div id="teacher_bar">
	  <ul class="nav navbar-nav">
        <li class="active"><a href="#">查看所有学生信息 <span class="sr-only">(current)</span></a></li>
        <li><a href="./analysis.php">统计学生信息</a></li>
        
      </ul>
      <div class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="输入学号搜索">
        </div>
        <button onclick="show_info($('.form-control').val());" class="btn btn-default">搜索</button>
      </div>
	  </div>
      <ul class="nav navbar-nav" style="float:right">
                     
                        <li style="list-style-type:none">
                            <a href="#" data-toggle="dropdown">
                                <section>
                                   <span style="color:#777"><span id="welcome">欢迎光临</span></span>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->

                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username" style="margin-left:10px"><a></a></li>
                                <li class="email" style="margin-left:10px"><a></a></li>

                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="#"  onclick="$('#change_passwd').show();">修改密码</a>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="../../index.php" style="float:right">
                                        注销
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>

                    </ul>
    </div>
  </div>
</nav>
<div class="widget-body" id="change_passwd" style="display: none; height: auto;">
	<?php include '../change_passwd.php'; ?>
</div>

