//处理添加业务路径
$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
    getStudentData(page);
	$("small").text("学生信息管理系统");
	
});

function getStudentData(page) {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_student_data",
        dataType: "json",
        data: {
			page:page
        },
        async: true,
        success: function (data) {
            if(data.total>0){
				for(var i=0;i<data.total;i++){
					var student=data['s'+i];
					var html="<tr><td>"+student[0]+"</td><td>"+student[1]+"</td><td>"+student[4]+"</td><td>"+student[5]+"</td><td>"+student[2]+"</td><td>"+student[3]+"</td><td><button onclick='javascript:show_info("+student[0]+")'>查看</button></td></tr>";
					var origin=$("#student_table_all").html()+html;
					$("#student_table_all").html(origin);
				}
				//保证了从数据库里拿到不会超过20个
				var all=data.total_all;
				setPagination(all);
				$(".loading-container").addClass("loading-inactive");
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function change_passwd(btn){
	btn.text="请稍等";
	var passwd=$("#n_passwd").val();
	//alert(passwd);
	$.ajax({
        type: "post",
        url: "../../index.php?c=home&a=change_passwd_t",
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
