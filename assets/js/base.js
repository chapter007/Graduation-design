//处理添加业务路径

function getData() {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=getdata",
        dataType: "json",
        data: {
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
				$("#welcome").text("欢迎光临："+student[1]);
				$(".email").text(student[0]);
				$(".loading-container").addClass("loading-inactive");
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getSingleData(id) {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_single_data",
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
				$(".loading-container").addClass("loading-inactive");
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getStudentData() {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_student_data",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            if(data.total>0){
				for(var i=0;i<data.total;i++){
					var student=data['s'+i];
					var html="<tr><td>"+student[0]+"</td><td>"+student[1]+"</td><td>"+student[4]+"</td><td>"+student[5]+"</td><td>"+student[2]+"</td><td>"+student[3]+"</td><td><button onclick='javascript:show_info("+student[0]+")'>查看</button></td></tr>";
					var origin=$("#student_table").html()+html;
					$("#student_table").html(origin);
				}
				setPagination(data.total);
				$(".loading-container").addClass("loading-inactive");
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getPageData() {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_page_data",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            if(data.total>0){
				setPagination(data.total);
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getOtherData() {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_other_data",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            if(data.total==1){
				var oinfo=data.student;
				$("#homework option:selected").text(oinfo[1]);
				$("#attend option:selected").text(oinfo[2]);
				$("#nightlearning").val(oinfo[3]);
				$("#librarylend").val(oinfo[4]);
				$("#feelhard").val(oinfo[5]);
				$("#generalfeel option:selected").text(oinfo[6]);
				$("#graduateplan option:selected").text(oinfo[7]);
				$("#worklearning option:selected").text(oinfo[8]);
				$("#sports option:selected").text(oinfo[9]);
				$("#attendactivity option:selected").text(oinfo[10]);
				$("#playgame option:selected").text(oinfo[11]);
			}
			$(".loading-container").addClass("loading-inactive");
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function update_info(){
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
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function update_other_info(){
	var homework=$.trim($("#homework option:selected").text());
	var attend=$.trim($("#attend option:selected").text());
	var nightlearning=$("#nightlearning").val();
	var librarylend=$("#librarylend").val();
	var feelhard=$("#feelhard").val();
	var generalfeel=$.trim($("#generalfeel option:selected").text());
	var graduateplan=$.trim($("#graduateplan option:selected").text());
	var worklearning=$.trim($("#worklearning option:selected").text());
	var sports=$.trim($("#sports option:selected").text());
	var attendactivity=$.trim($("#attendactivity option:selected").text());
	var playgame=$.trim($("#playgame option:selected").text());
	$.ajax({
        type: "post",
        url: "../../index.php?c=home&a=up_other_data",
        dataType: "json",
        data: {
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
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function show_info(id){
	$("#show_info").show();
	$(".loading-container").removeClass("loading-inactive");
	getSingleData(id);
}

function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null && r.length > 0)
        return unescape(r[2]);
    return null;
}

function setPagination(totalData){
	var page=totalData/20;
	var paginationCode="<ul class='pagination pagination-lg'><li class='disabled'><a href='#'>«</a></li><li class='active'><a href='#' style='z-index:0'>1 <span class='sr-only'>(current)</span></a></li>"+makeElementCode(page)+"<li><a href='#'>»</a></li></ul>";
	
	$("#pagination").html(paginationCode);
}

function makeElementCode(page){
	if(page>1){
		var elementCode="<li><a href='#'>2</a></li>";
		for(var i=3;i<=page;i++){
			elementCode+="<li><a href='#'>"+i+"</a></li>";
		}
		return elementCode;
	}else{
		return "";
	}
}

String.prototype.format = function (){
    if (arguments.length == 0)
        return this;
    for (var s = this, i = 0; i < arguments.length; i++)
        s = s.replace(new RegExp("\\{" + i + "\\}", "g"), arguments[i]);
    return s;
};