//处理添加业务路径
$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
	$(".navbar-brand").text("学生信息管理系统");
	$("#teacher_bar>ul>li:eq(1)>a").attr('href','./analysis.php?id='+id+''); 
    getStudentData(page,id);
});

function getStudentData(page,id) {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_student_data",
        dataType: "json",
        data: {
			page:page,
			t_id:id
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
				var t_name=data.t_name;
				setCookie("t_name",t_name,1000);
				setCookie("t_id",id,1000);
				
				setPagination(all);
				//$("#page_"+page+"").addClass("active");
				//$("#page"+page+"").addClass("active");
				$(".loading-container").addClass("loading-inactive");
				$(".username").text("姓名："+t_name);
				$("#welcome").text("欢迎光临："+t_name);
				$(".email").text("工号："+id);
				$('.footer>code').text("学生信息表，点击可以查看更多信息,一页最多显示20条数据，一共"+all+"条数据")
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}
