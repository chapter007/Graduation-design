<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>登录</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--Beyond styles-->
    <link id="beyond-link" href="../assets/css/beyond.min.css" rel="stylesheet" />
    <link href="../assets/css/demo.min.css" rel="stylesheet" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="../assets/js/skins.min.js"></script>
</head>

                <!--Body-->
                <body>       
                    <form id="form1">
                        <div class="login-container animated fadeInDown">
                            <div class="loginbox bg-white" style="width:80%!important;margin-left:10%">
                                <div class="loginbox-title">登录</div>
								<div style="width:80%;margin-left:10%">
									<div class="loginbox-textbox" style="height: initial;">
                                    <input type="text" class="form-control" style="max-width: none;" id="s_id" placeholder="学号" value="root"/>
                                </div>
                                <div class="loginbox-textbox" style="height: initial;">
                                    <input type="password" class="form-control" style="max-width: none;" id="password" placeholder="密码" value="root"/>
                                </div>
								<div class="loginbox-forgot" style="height:10%">
                                    <a href="javascript:alert('默认密码是学号')">忘记密码?</a>
                                </div>
                                <div class="loginbox-submit" style="margin-top:10%">
                                    <div class="btn btn-primary btn-block" onclick="checkAccount($('#s_id').val(),$('#password').val(),0)" style="width:30%">登录</div>
									<div class="btn btn-primary btn-block" onclick="checkAccount($('#s_id').val(),$('#password').val(),1)" style="width:45%;margin-top: 0px;">教师登录</div>
                                </div>
								</div>
                                
                                
                            </div>
                        </div>
                    </form>
                    <script src="../assets/js/jquery-3.2.0.min.js"></script>
                    <script src="../assets/js/bootstrap.min.js"></script>

                    <!--Beyond Scripts-->
                    <script src="../assets/js/beyond.min.js"></script>
					
					<script src="../assets/js/base.js"></script>
					<script src="../assets/js/login.js"></script>
                </body>

</html>
