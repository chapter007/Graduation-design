var id=getQueryString("id");
var page=getQueryString("page");

function getSingleData(s_id) {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_single_data",
        dataType: "json",
        data: {
			id:s_id
        },
        async: true,
        success: function (data) {
            if(data.total==1&&data.student!=null){
				var student=data.student;
				//alert(student[0]);
				$("#s_id").val(student[0]);
				$("#name").val(student[1]);
				$("#mobile").val(student[2]);
				$("#qq").val(student[3]);
				$("#class").val(student[4]);
				$("#teacher").val(student[5]);
				$("#homework").val(student[6]);
				$("#attend").val(student[7]);
				$("#nightlearning").val(student[8]);
				$("#librarylend").val(student[9]);
				$("#feelhard").val(student[10]);
				$("#generalfeel").val(student[11]);
				$("#graduateplan").val(student[12]);
				$("#worklearning").val(student[13]);
				$("#sports").val(student[14]);
				$("#attendactivity").val(student[15]);
				$("#playgame").val(student[16]);
				getLessonData(s_id);
			}else{
				alert("查无此人或是还未填写学习状态");
				$(".loading-container").addClass("loading-inactive");
				hideElement();
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
	$("#main").hide();
	$(".btn-group").hide();
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
	var pageCount=totalData/20;
	$('#pagination').pagination({
		totalData:totalData,
		showData:20,
		pageCount: pageCount,
		current:page,
		count:3,
		coping:true
	});
	/* var page=Math.ceil(totalData/20);
	var paginationCode="<ul class='pagination pagination-lg'><li id='page_1'><a href='./index.php?id="+id+"&page=1' style='z-index:0'>1 <span class='sr-only'>(current)</span></a></li>"+makeElementCode(page)+"</ul>";
	
	$("#pagination").html(paginationCode); */
	
}

function makeElementCode(page){
	if(page>1){
		var elementCode="<li id=page_"+2+"><a href='./index.php?id="+id+"&page=2'>2</a></li>";
		for(var i=3;i<=page;i++){
			elementCode+="<li id=page_"+i+"><a href='./index.php?id="+id+"&page="+i+"'>"+i+"</a></li>";
		}
		return elementCode;
	}else{
		return "";
	}
}

function getLessonData(s_id) {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=get_lesson_data",
        dataType: "json",
        data: {
			id:s_id
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
				alert('未获取到课程数据!');
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

String.prototype.format = function (){
    if (arguments.length == 0)
        return this;
    for (var s = this, i = 0; i < arguments.length; i++)
        s = s.replace(new RegExp("\\{" + i + "\\}", "g"), arguments[i]);
    return s;
};

function change_passwd(btn){
	btn.text="请稍等";
	var o_passwd=$("#o_passwd").val();
	var n_passwd=$("#n_passwd").val();
	var type=checkPage();
	if(isNull(o_passwd)||isNull(n_passwd)){
		alert("请输入完整");
		btn.text="保存";
		return;
	}
	$.ajax({
        type: "post",
        url: "../../index.php?c=home&a=change_passwd",
        dataType: "json",
        data: {
			id:id,
			n_passwd:n_passwd,
			o_passwd:o_passwd,
			type:type
        },
        async: true,
        success: function (data) {
            if(data.result==1){
				alert('修改密码成功，请重新登录');
				location.href="../../index.php";
			}else{
				alert('修改密码不成功，请检查旧密码输入是否正确');
				btn.text="保存";
			}
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

/** 
* 判断是否null 
* @param data 
*/
function isNull(data){ 
	return (data == "" || data == undefined || data == null) ? true : false; 
}

function hideElement(){
	//隐藏这个view之前要做一些清理工作
	$("#student_table").html("");
	$("#main").show();
	$(".btn-group").show();
	$('#show_info').hide();
}

function setCookie(c_name,value,expiredays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate()+expiredays);
	document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
}

function getCookie(c_name){
if (document.cookie.length>0){
  c_start=document.cookie.indexOf(c_name + "=");
  if (c_start!=-1){ 
    c_start=c_start + c_name.length+1; 
    c_end=document.cookie.indexOf(";",c_start);
    if (c_end==-1) c_end=document.cookie.length;
    return unescape(document.cookie.substring(c_start,c_end));
    } 
  }
	return "";
}

function checkPage(){
	var title=$(".navbar-brand").text();
	if(title=="学生信息管理系统"){
		return 1;
	}else{
		return 0;
	}
}