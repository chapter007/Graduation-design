//处理添加业务路径
$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
    getData();
	getOtherData();
	
});

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

function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null && r.length > 0)
        return unescape(r[2]);
    return null;
}


String.prototype.format = function (){
    if (arguments.length == 0)
        return this;
    for (var s = this, i = 0; i < arguments.length; i++)
        s = s.replace(new RegExp("\\{" + i + "\\}", "g"), arguments[i]);
    return s;
};