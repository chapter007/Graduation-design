// 基于准备好的dom，初始化echarts实例	
var myChart = echarts.init(document.getElementById('main'));

$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
	$(".navbar-brand").text("学生信息分析系统");
	$("#teacher_bar>ul>li:eq(0)").removeClass("active");
	$("#teacher_bar>ul>li:eq(1)").addClass("active");
	$(".loading-container").addClass("loading-inactive");
	$("#teacher_bar>ul>li:eq(0)>a").attr('href','./index.php?id='+id+'&page=1');
	
	chart_option(0);
});

function chart_option(option){
	switch(option){
		case 0:
			get_chart_data('homework');
			$("#title").text("作业完成情况");
			break;
		case 1:
			get_chart_data('attend');
			$("#title").text("出勤情况");
			break;
		case 2:
			get_chart_data('nightlearning');
			$("#title").text("晚自习情况");
			break;
		case 3:
			get_chart_data('librarylend');
			$("#title").text("图书借阅情况");
			break;
		case 4:
			get_chart_data('generalfeel');
			$("#title").text("学习总体感觉");
			break;
		case 5:
			get_chart_data('playgame');
			$("#title").text("玩游戏情况");
			break;
		
	}
}

function get_chart_data(categroy){
	$.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_chart_data",
        dataType: "json",
        data: {
			categroy:categroy
        },
        async: true,
        success: function (data) {
            var i=data.i;
			var j=data.j;
			var k=data.k;
			make_chart_info(categroy,i,j,k);
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function make_chart_info(categroy,i,j,k){
	var title,data_name1,data_name2,data_name3;
	switch(categroy){
		case 'homework':
			title='完成作业情况';
			data_name1='全部独立完成';
			data_name2='独立完成2/3';
			data_name3='独立完成1/3';
			break;
		case 'attend':
			title='出勤情况';
			data_name1='从未缺课';
			data_name2='有缺课不超过3次';
			data_name3='有缺课超过3次';
			break;
		case 'nightlearning':
			title='晚自习情况';
			data_name1='经常去';
			data_name2='一周3次以上';
			data_name3='很少去';
			break;
		case 'librarylend':
			title='图书借阅情况';
			data_name1='从不';
			data_name2='偶尔';
			data_name3='经常';
			break;
		case 'generalfeel':
			title='学习总体感觉';
			data_name1='没有任何问题';
			data_name2='基本跟得上';
			data_name3='有问题感觉很吃力';
			break;
		case 'playgame':
			title='玩游戏情况';
			data_name1='从不';
			data_name2='偶尔';
			data_name3='经常';
			break;
	}
	// 指定图表的配置项和数据
			var option = {
					title: {
							text: title
						},
						tooltip: {},
						series: [{
							name: '人数',
							type: 'pie',
							data: [
								{value:i,name:data_name1},
								{value:j,name:data_name2},
								{value:k,name:data_name3}
							].sort(function (a, b) { return a.value - b.value; })
						}]
					};
		// 使用刚指定的配置项和数据显示图表。
		myChart.setOption(option);
}