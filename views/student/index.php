<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
  <meta name="generator" content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
  <meta charset="utf-8" />

  <title>学生信息采集系统</title>
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

  <script src="../../assets/js/skins.min.js">
</script>
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
          <div class="row">
            <div class="col-lg-12">
              <div class="widget radius-bordered">
                <div class="widget-header">
                  <span class="widget-caption">基本信息</span>
                </div>

                <div class="widget-body">
                  <div class="form-title">
                    基本信息填写
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">姓名：</label>

                        <div class="col-lg-9">
                          <input class="form-control" type="text" id="name" />
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">学号：</label>

                        <div class="col-lg-9">
                          <input class="form-control" type="text" id="s_id" />
                        </div>
                      </div>
                    </div>

                    <div class="horizontal-space"></div>

                    <div class="row">
                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">班级：</label>

                        <div class="col-lg-9">
                          <input class="form-control" type="text" id="class" />
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">手机：</label>

                        <div class="col-lg-9">
                          <input class="form-control" type="text" id="mobile" />
                        </div>
                      </div>
                    </div>

                    <div class="horizontal-space"></div>

                    <div class="row">
                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">QQ：</label>

                        <div class="col-lg-9">
                          <input class="form-control" type="text" id="qq" />
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">辅导员：</label>

                        <div class="col-lg-9">
                          <input class="form-control" type="text" id="teacher" />
                        </div>
                      </div>
                    </div>

                    <div class="horizontal-space"></div>

                    <div class="row"></div>

                    <div class="horizontal-space"></div>
                  </div>

                  <div class="col-lg-offset-10 buttons-preview">
                    <a class="btn btn-blue" onclick="update_info(this)">保存</a> <a class="btn btn-blue">取消</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="widget radius-bordered">
                <div class="widget-header">
                  <span class="widget-caption">其他信息</span>
                </div>

                <div class="widget-body">
                  <div class="form-title">
                    其他信息填写
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">作业情况：</label>

                        <div class="col-lg-9">
                          <select class="form-control" id="homework">
                            <option value="all">
                              全部独立完成
                            </option>

                            <option value="some">
                              独立完成2/3
                            </option>

                            <option value="little">
                              独立完成1/3
                            </option>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">出勤情况：</label>

                        <div class="col-lg-9">
                          <select class="form-control" id="attend">
                            <option value="">
                              从未缺课
                            </option>

                            <option value="">
                              有缺课x次
                            </option>

                            <option value="">
                              有旷课x次
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="horizontal-space"></div>

                    <div class="row">
                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">晚自习情况：</label>

                        <div class="col-lg-9">
                          <input class="form-control" type="text" id="nightlearning" />
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">玩网络游戏情况：</label>

                        <div class="col-lg-9">
                          <select class="form-control" id="playgame">
                            <option value="">
                              从不
                            </option>

                            <option value="">
                              偶尔
                            </option>

                            <option value="">
                              经常
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="horizontal-space"></div>

                    <div class="row">
                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">图书借阅情况：</label>

                        <div class="col-lg-9">
                          <input class="form-control" type="text" id="librarylend" />
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">所选课程中感觉最难学的课程是：</label>

                        <div class="col-lg-9">
                          <input class="form-control" type="text" id="feelhard" />
                        </div>
                      </div>
                    </div>

                    <div class="horizontal-space"></div>

                    <div class="row">
                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">目前学习总体感觉：</label>

                        <div class="col-lg-9">
                          <select class="form-control" id="generalfeel">
                            <option value="">
                              没有任何问题
                            </option>

                            <option value="">
                              基本跟的上
                            </option>

                            <option value="">
                              有问题感觉很吃力
                            </option>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">考研计划：</label>

                        <div class="col-lg-9">
                          <select class="form-control" id="graduateplan">
                            <option value="">
                              有
                            </option>

                            <option value="">
                              无
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="horizontal-space"></div>

                    <div class="row">
                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">勤工俭学：</label>

                        <div class="col-lg-9">
                          <select class="form-control" id="worklearning">
                            <option value="">
                              有
                            </option>

                            <option value="">
                              无
                            </option>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">课外体育活动：</label>

                        <div class="col-lg-9">
                          <select class="form-control" id="sports">
                            <option value="">
                              有
                            </option>

                            <option value="">
                              无
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="horizontal-space"></div>

                    <div class="row">
                      <div class="col-lg-6">
                        <label class="col-lg-3 control-label">参加社团活动：</label>

                        <div class="col-lg-9">
                          <select class="form-control" id="attendactivity">
                            <option value="">
                              有
                            </option>

                            <option value="">
                              无
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="horizontal-space"></div>

                    <div class="col-lg-offset-10 buttons-preview">
                      <a class="btn btn-blue" onclick="update_other_info(this)">保存</a> <a class="btn btn-blue">取消</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="widget radius-bordered">
                <div class="widget-header">
                  <span class="widget-caption">课程信息</span>
                </div>

                <div class="widget-body">
                  <div class="form-title">
                    课程信息填写
                  </div>

                  <div class="form-group">
					<table class="table table-hover table-striped table-bordered">
                                    <thead class="bordered-blueberry">
                                        <tr>
                                            <th>
                                                课程号
                                            </th>
                                            <th>
												课程名
                                            </th>
                                            <th>
                                                授课老师
                                            </th>
                                            <th>
                                                评价
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="student_table">
                                        
                                    </tbody>
                                </table>
                    <div class="horizontal-space"></div>

                    <div class="col-lg-offset-10 buttons-preview">
                      <a class="btn btn-blue" onclick="update_lesson_info(this)">保存</a> <a class="btn btn-blue">取消</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /Page Body -->
      </div>
    </div><!-- /Page Content -->
  </div><!--Basic Scripts-->
  <script src="../../script/jquery-1.8.3.js">
</script> <script src="../../script/jquery-ui-1.9.2.min.js">
</script> <script src="../../script/jquery.ui.touch-punch-0.2.2.min.js">
</script> <script src="../../assets/js/bootstrap.min.js">
</script> <!--Beyond Scripts-->
   <script src="../../assets/js/beyond.min.js">
</script> <!--Page Related Scripts-->
	<script src="../../assets/js/base.js"></script>
	<script src="../../assets/js/index.js"></script>
</body>
</html>
