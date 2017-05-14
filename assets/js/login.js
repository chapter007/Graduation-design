//处理添加业务路径
$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
});

function checkAccount(id,password,teacher) {
	if(teacher==0){
		$("#login_btn").text("请稍等");
	}else{
		$("#tlogin_btn").text("请稍等");

	}
    $.ajax({
        type: "post",
        url: "../index.php?c=home&a=check_account",
        dataType: "json",
        data: {
			id:id,
			password:password,
			teacher:teacher
        },
        async: true,
        success: function (data) {
            if(data.result==1){
				if(teacher==1){
					window.location.href='../views/admin/index.php?id='+id+'';
				}else{
					window.location.href='../views/student/index.php?id='+id+'';
				}
			}else{
				alert("id或者密码错误!");
				if(teacher==0){
					$("#login_btn").text("登录");
				}else{
					$("#tlogin_btn").text("教师登录");

				}
			}
        },
        error: function () {
            alert('获取数据失败!');
			
        }
    });
}