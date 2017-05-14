//处理添加业务路径
$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
    getStudentData();
	$("small").text("学生信息管理系统");
	
});

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