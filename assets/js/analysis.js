//处理添加业务路径
$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
	$("#teacher_bar>ul>li:eq(0)").removeClass("active");
	$("#teacher_bar>ul>li:eq(1)").addClass("active");
	$(".loading-container").addClass("loading-inactive");
	$("#teacher_bar>ul>li:eq(0)>a").attr('href','./index.php?id='+id+'&page=1'); 
});