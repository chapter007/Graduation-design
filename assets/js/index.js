
//处理添加业务路径
$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
	getData(id);
	getOtherData(id);
	getLessonData(id);
});

function change_passwd(btn){
	btn.text="请稍等";
	var passwd=$("#n_passwd").val();
	//alert(passwd);
	$.ajax({
        type: "post",
        url: "../../index.php?c=home&a=change_passwd",
        dataType: "json",
        data: {
			id:id,
			passwd:passwd
        },
        async: true,
        success: function (data) {
            if(data.result==1){
				alert('修改密码成功，请重新登录');
				location.href="../../index.php";
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getData(id) {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=getdata",
        dataType: "json",
        data: {
			id:id
        },
        async: true,
        success: function (data) {
            if(data.total==1){
				var student=data.student;
				//alert(student[0]);
				$("#s_id").val(student[0]);
				$("#name").val(student[1]);
				$("#mobile").val(student[2]);
				$("#qq").val(student[3]);
				$("#class").val(student[4]);
				$("#teacher").val(student[5]);
				$("#o_passwd").val(student[6]);
				$("#welcome").text("欢迎光临："+student[1]);
				$(".email").text("学号："+student[0]);
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getOtherData(id) {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_other_data",
        dataType: "json",
        data: {
			id:id
        },
        async: true,
        success: function (data) {
            if(data.total==1){
				var oinfo=data.student;
				$("#homework").val(oinfo[1]);
				$("#attend").val(oinfo[2]);
				$("#nightlearning").val(oinfo[3]);
				$("#librarylend").val(oinfo[4]);
				$("#feelhard").val(oinfo[5]);
				$("#generalfeel").val(oinfo[6]);
				$("#graduateplan").val(oinfo[7]);
				$("#worklearning").val(oinfo[8]);
				$("#sports").val(oinfo[9]);
				$("#attendactivity").val(oinfo[10]);
				$("#playgame").val(oinfo[11]);
			}
			//$(".loading-container").addClass("loading-inactive");
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function update_info(btn){
	btn.text="请稍等";
	var id=$("#s_id").val();
	var name=$("#name").val();
	var mobile=$("#mobile").val();
	var qq=$("#qq").val();
	var myclass=$("#class").val();
	var teacher=$("#teacher").val();
	$.ajax({
        type: "post",
        url: "../../index.php?c=home&a=up_data",
        dataType: "json",
        data: {
			id:id,
			name:name,
			mobile:mobile,
			qq:qq,
			myclass:myclass,
			teacher:teacher
        },
        async: true,
        success: function (data) {
            if(data.result==1){
				alert("更新数据成功");
			}
			btn.text="保存";
        },
        error: function () {
            alert('获取数据失败!');
			btn.text="保存";
        }
    });
}

function update_other_info(btn){
	btn.text="请稍等";
	var id=$("#s_id").val();
	var homework=$.trim($("#homework").val());
	var attend=$.trim($("#attend").val());
	var nightlearning=$("#nightlearning").val();
	var librarylend=$("#librarylend").val();
	var feelhard=$("#feelhard").val();
	var generalfeel=$.trim($("#generalfeel").val());
	var graduateplan=$.trim($("#graduateplan").val());
	var worklearning=$.trim($("#worklearning").val());
	var sports=$.trim($("#sports").val());
	var attendactivity=$.trim($("#attendactivity").val());
	var playgame=$.trim($("#playgame").val());
	$.ajax({
        type: "post",
        url: "../../index.php?c=home&a=up_other_data",
        dataType: "json",
        data: {
			id:id,
			homework:homework,
			attend:attend,
			nightlearning:nightlearning,
			librarylend:librarylend,
			feelhard:feelhard,
			generalfeel:generalfeel,
			graduateplan:graduateplan,
			worklearning:worklearning,
			sports:sports,
			attendactivity:attendactivity,
			playgame:playgame
        },
        async: true,
        success: function (data) {
            if(data.result==1){
				alert("更新数据成功");
			}
			btn.text="保存";
        },
        error: function () {
            alert('获取数据失败!');
			btn.text="保存";
        }
    });
}

function getLessonData(id) {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_lesson_data",
        dataType: "json",
        data: {
			id:id
        },
        async: true,
        success: function (data) {
            if(data.total>0){
				for(var i=0;i<data.total;i++){
					var lesson=data['s'+i];
					var html="<tr><td>"+lesson[0]+"</td><td>"+lesson[1]+"</td><td>"+lesson[2]+"</td><td><input value="+lesson[3]+" c_id="+lesson[0]+"></td></tr>";
					var origin=$("#student_table").html()+html;
					$("#student_table").html(origin);
				}
				$(".loading-container").addClass("loading-inactive");
			}else{
				$(".loading-container").addClass("loading-inactive");
				alert('获取数据失败!');
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function update_lesson_info(btn){
	btn.text="请稍等";
	var id=$("#s_id").val();
	//TODO:获取到课程和评分的数据，会有多组
	var lesson_num=$("td>input").size();
	var lesson=new Array();
	for(var i=0;i<lesson_num;i++){
		var score=$("td>input:eq("+i+")").val();
		var c_id=$("td>input:eq("+i+")").attr("c_id");
		lesson[i]={id:c_id,score:score};
	}
	$.ajax({
        type: "post",
        url: "../../index.php?c=home&a=up_lesson_data",
        dataType: "json",
        data: {
			id:id,
			lesson:lesson
        },
        async: true,
        success: function (data) {
            if(data.result==1){
				alert("更新数据成功");
				btn.text="保存";
			}
        },
        error: function () {
            alert('获取数据失败!');
			btn.text="保存";
        }
    });
}