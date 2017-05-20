var id=getQueryString("id");
var page=getQueryString("page");

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
				getLessonData(id);
				//$(".loading-container").addClass("loading-inactive");
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
		var elementCode="<li><a href='./index.php?id="+id+"&page=2'>2</a></li>";
		for(var i=3;i<=page;i++){
			elementCode+="<li><a href='./index.php?id="+id+"&page="+i+"'>"+i+"</a></li>";
		}
		return elementCode;
	}else{
		return "";
	}
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

String.prototype.format = function (){
    if (arguments.length == 0)
        return this;
    for (var s = this, i = 0; i < arguments.length; i++)
        s = s.replace(new RegExp("\\{" + i + "\\}", "g"), arguments[i]);
    return s;
};