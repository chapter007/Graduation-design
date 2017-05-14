//处理添加业务路径
$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
    getStudentData();
	$("small").text("学生信息管理系统");
	//getPageData();
});

