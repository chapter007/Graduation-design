<!-- Loading Container -->
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
<!--  /Loading Container -->
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small style="line-height:1.8em">
                        学生信息采集系统
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->

           
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                     
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <section>
                                    <h2><span class="profile"><span id="welcome">欢迎光临</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->

                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a></a></li>
                                <li class="email"><a></a></li>

                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="#" class="pull-right" onclick="change_passwd()">修改密码</a>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="../../index.php">
                                        注销
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<div class="widget-body" id="change_passwd" style="display: none; height: auto;">
	<?php include '../change_passwd.php'; ?>
</div><!--学生信息-->