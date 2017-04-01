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
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--Beyond styles-->
    <link id="beyond-link" href="../assets/cssed/beyond.min.css" rel="stylesheet" />
    <link href="assets/css/demo.min.css" rel="stylesheet" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="assets/js/skins.min.js"></script>
</head>

                <!--Body-->
                <body>       
                    <form id="form1" action="../controllers/yz.php" method="post">
                        <div class="login-container animated fadeInDown">
                            <div class="loginbox bg-white">
                                <div class="loginbox-title">登录</div>

                                <div class="loginbox-textbox">
                                    <input type="text" class="form-control" name="s_id" placeholder="学号" value="root"/>
                                </div>
                                <div class="loginbox-textbox">
                                    <input type="password" class="form-control" name="password" placeholder="密码" value="root"/>
                                </div>
                                <div class="loginbox-forgot">
                                    <a href="">忘记密码?</a>
                                </div>
                                <div class="loginbox-submit">
                                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="登录">
                                </div>
                            </div>
                        </div>
                    </form>
                    <script src="../assets/js/jquery-2.0.3.min.js"></script>
                    <script src="../assets/js/bootstrap.min.js"></script>

                    <!--Beyond Scripts-->
                    <script src="../assets/js/beyond.js"></script>
                </body>

</html>
