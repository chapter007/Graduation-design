//处理添加业务路径
$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
    getData();
	getOtherData();
});

function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null && r.length > 0)
        return unescape(r[2]);
    return null;
}

function setChartNum() {
    document.getElementById("ok").onclick = function () {
        var checkboxs = $("input:checkbox");
        var arr = new Array();
        var run = "资产运行概况";
        var useralert = "资产告警概况";
        var buy = "资产采购概况";
        var reverse = "预留";
        for (i = 0; i < checkboxs.length; i++) {
            if (checkboxs[i].checked) {
                arr.push(checkboxs[i].id);
            }
        }
        if (arr.length != 3) {
            alert("你需要选择三个");
        } else {
            if (arr[0] != "Crun") {
                createPie("levelpie", "yearpie", "leftpie",useralert,buy,reverse);
            } else if (arr[1] != "Calert") {
                createPie("devpie", "yearpie", "leftpie",run,buy,reverse);
            } else if (arr[2] != "Cbuy") {
                createPie("devpie", "levelpie", "leftpie",run,useralert,reverse);
            } else if (arr[1] != "Creverse") {
                createPie("devpie", "levelpie", "yearpie",run,useralert,buy);
            }
        }
    }
}

function createPie(id1, id2, id3, n1, n2, n3) {
    var innerHtml = "<div id={0} class='chart chart-xs' style='height:180px;'></div>".format(id1);
    var innerHtml2 = "<div id={0} class='chart chart-xs' style='height:180px;'></div>".format(id2);
    var innerHtml3 = "<div id={0} class='chart chart-xs' style='height:180px;'></div>".format(id3);
    document.getElementById("devpie1").innerHTML = innerHtml;
    document.getElementById("levelpie1").innerHTML = innerHtml2;
    document.getElementById("yearpie1").innerHTML = innerHtml3;
    getPieData2(id1, id2, id3, n1, n2, n3);
    $("a.close").click();
}

function hideDiv(id) {
    document.getElementById("devpie1").style.display = "";
    document.getElementById("levelpie1").style.display = "";
    document.getElementById("yearpie1").style.display = "";
    document.getElementById("leftpie1").style.display = "";
    document.getElementById(id).style.display = "none";
    $("a.close").click();
}
//setPie('devpie', '设备监测状态图', [<?php echo $serpie; ?>]);

function getPieData2(id1, id2, id3, n1, n2, n3) {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=getpies",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            var alarmNum = eval(data.alarmNum);
            var alarmLevel = eval(data.alarmLevel);
            var devYear = eval(data.devYear);

            setPie(id1, n1, alarmNum);
            setPie(id2, n2, alarmLevel);
            setPie(id3, n3, devYear);
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getPieData() {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=getpies",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            var alarmNum = eval(data.alarmNum);
            var alarmLevel = eval(data.alarmLevel);
            var devYear = eval(data.devYear);
            setPie('devpie', '资产运行概况', alarmNum);
            setPie('levelpie', '资产告警概况', alarmLevel);
            setPie('yearpie', '资产采购概况', devYear);
            setPie('leftpie', '预留', alarmLevel);
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getAlertData() {
    $.ajax({
        type: "post",
        url: "../../index.php?c=home&a=getInfo",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            var ppinfo_num = eval(data.ppinfo_num);
            var ppinfo_type = eval(data.ppinfo_type);
            var ppinfo_ip = eval(data.ppinfo_ip);
            var ppinfo_site = eval(data.ppinfo_site);
            var ppinfo_use = eval(data.ppinfo_use);
            var alertnum = eval(data.alertnum);
            var alertrank = eval(data.alertrank);
            var alertinfo = eval(data.alertinfo);

            document.getElementById("alertrank2").style.width = alertrank + "%";
            setColor("alertrank2", alertrank);
            document.getElementById("alertrank0").style.width = alertrank - 50 + "%";
            setColor("alertrank0", alertrank - 50);
            document.getElementById("alertrank1").style.width = alertrank - 30 + "%";
            setColor("alertrank1", alertrank - 30);
            for (var i = 0; i < 3; i++) {
                setInfo("alertnum" + i, alertnum);
                setInfo("alertinfo" + i, alertinfo);
                setInfo("ppinfo_num" + i, ppinfo_num);
                setInfo("ppinfo_type" + i, ppinfo_type);
                setInfo("ppinfo_site" + i, ppinfo_site);
                setInfo("ppinfo_ip" + i, ppinfo_ip);
                setInfo("ppinfo_use" + i, ppinfo_use);
            }
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function setInfo(id, info) {
    document.getElementById(id).innerHTML = info;
}

function setColor(id, rank) {
    if (rank > 50) {
        //alert("id is ?"+id);
        document.getElementById(id).className = "rating-value_red";
    }
}

function setPie(elementId, elementText, elementData) {
    //alert(elementId);
    var chart;
    chart = new Highcharts.Chart({
        chart: {
            renderTo: elementId,
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            borderWidth: 1,
            margin: [20, 50, 40, 50]
        },
        title: {
            text: elementText
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.point.name + '</b>: ' + this.point.y + '个(' + this.percentage.toFixed(2) + '%)';
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
                type: 'pie',
                name: elementText,
                data: elementData
            }]
    });
}

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
				//alert(student[0]);
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
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function setLine(ctx, data, data2) {
    //alert("setLine"+data);
    window.myLine = new Chart(ctx).Line({
        labels: ["一月", "二月", "三月", "四月", "五月"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(100,187,105,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: data
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(255,111,52,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: data2
            }
        ]
    }, {
        responsive: true
    });
}

String.prototype.format = function (){
    if (arguments.length == 0)
        return this;
    for (var s = this, i = 0; i < arguments.length; i++)
        s = s.replace(new RegExp("\\{" + i + "\\}", "g"), arguments[i]);
    return s;
};