/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $.ajaxSetup({
        async: true
    });
    getLineData();
    getInfoData();
});

function getInfoData() {
    $.ajax({
        type: "post",
        url: "../index.php?c=single&a=getInfo",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            var ppinfo_num = eval(data.ppinfo_num);
            var ppinfo_type = eval(data.ppinfo_type);
            var ppinfo_ip = eval(data.ppinfo_ip);
            var ppinfo_site = eval(data.ppinfo_site);
            setInfo("ppinfo_num0", ppinfo_num);
            setInfo("ppinfo_type0", ppinfo_type);
            setInfo("ppinfo_ip0", ppinfo_ip);
            setInfo("ppinfo_site0", ppinfo_site);
        },
        error: function () {
            alert('获取数据失败!');
        }
    });

}

function getLineData() {
    $.ajax({
        type: "post",
        url: "../index.php?c=single&a=getlines",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            var ctx = new Array(4);
            var randomNum = eval(data.num);
            var randomNum2 = eval(data.num2);
            var randomNum3 = eval(data.num3);
            var randomNum4 = eval(data.num4);
            var randomNum5 = eval(data.num5);
            var randomNum6 = eval(data.num6);
            var randomNum7 = eval(data.num7);
            var randomNum8 = eval(data.num8);
            ctx[0] = getLine("canvas" + 0);
            setLine(ctx[0], randomNum, randomNum2);
            ctx[1] = getLine("canvas" + 1);
            setLine(ctx[1], randomNum3, randomNum4);
            ctx[2] = getLine("canvas" + 2);
            setLine(ctx[2], randomNum5, randomNum6);
            ctx[3] = getLine("canvas" + 3);
            setLine(ctx[3], randomNum7, randomNum8);
            

        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getLineData2(id1,id2) {
    $.ajax({
        type: "post",
        url: "../index.php?c=single&a=getlines",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            //var ctx = new Array(6);
            var randomNum = eval(data.num);
            var randomNum2 = eval(data.num2);
            var randomNum3 = eval(data.num3);
            var randomNum4 = eval(data.num4);
            var ctx1 = getLine(id1);
            var ctx2 = getLine(id2);
            setLine(ctx1, randomNum, randomNum2);
            setLine(ctx2, randomNum3, randomNum4);
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getaLineData2(id1) {
    $.ajax({
        type: "post",
        url: "../index.php?c=single&a=getlines",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            //var ctx = new Array(6);
            var randomNum = eval(data.num);
            var randomNum2 = eval(data.num2);
            var ctx1 = getLine(id1);
            setLine(ctx1, randomNum, randomNum2);
            //setLine(ctx2, randomNum, randomNum2);
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function getLine(id) {
    return document.getElementById(id).getContext("2d");
}

function setInfo(id, info) {
    document.getElementById(id).innerHTML = info;
}

function setLine(ctx, data, data2) {
    window.myLine = new Chart(ctx).Line({
        labels: ["一月", "二月", "三月", "四月", "五月", "六月", "七月"],
        datasets: [
//            {
//                label: "My First dataset",
//                fillColor: "rgba(220,220,220,0.2)",
//                strokeColor: "rgba(220,220,220,1)",
//                pointColor: "rgba(220,220,220,1)",
//                pointStrokeColor: "#fff",
//                pointHighlightFill: "#fff",
//                pointHighlightStroke: "rgba(220,220,220,1)",
//                data: data
//            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(100,187,105,1)",
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

function setChart() {
    var checkboxs = $("input.input-lg");
    var arr = new Array();
    for (i = 0; i < checkboxs.length; i++) {
        if (checkboxs[i].checked) {
            arr.push(checkboxs[i].id);
        }
    }
    if (arr.length != 2) {
        alert("你需要选择两个");
    } else {
        if (arr[0] == "Cpu0" && arr[1] == "Cpu1") {
            //hideDiv("mem0","mem1");
            createDiv("cpu0", "cpu1","canvas0","canvas1");
        } else if (arr[0] == "Cpu0" && arr[1] == "Cmem0") {
            //hideDiv("cpu1","mem1");
            createDiv("cpu0", "mem0","canvas0","canvas6");
        } else if (arr[0] == "Cpu0" && arr[1] == "Cmem1") {
            //hideDiv("cpu1","mem0");
            createDiv("cpu0", "mem1","canvas0","canvas7");
        } else if (arr[0] == "Cpu1" && arr[1] == "Cmem0") {
            //hideDiv("cpu0","mem1");
            createDiv("cpu1", "mem0","canvas1","canvas7");
        } else if (arr[0] == "Cpu1" && arr[1] == "Cmem1") {
            //hideDiv("cpu0","mem0");
            createDiv("cpu1", "mem1","canvas1","canvas7");
        } else if (arr[0] == "Cmem0" && arr[1] == "Cmem1") {
            //hideDiv("cpu0","cpu1");
            createDiv("mem0", "mem1","canvas6","canvas7");
        }
    }
}

function setflowChart() {
    var checkboxs = $("input.input-sm");
    var arr = new Array();
    for (i = 0; i < checkboxs.length; i++) {
        if (checkboxs[i].checked) {
            arr.push(checkboxs[i].id);
        }
    }
     if (arr.length != 2) {
        alert("你需要选择两个");
    } else {
        if (arr[0] == "flow0" && arr[1] == "flow1") {
            createfDiv("Flow0", "Flow1","canvas2","canvas3");
        } else if (arr[0] == "flow0" && arr[1] == "flow2") {
            createfDiv("Flow0", "Flow2","canvas2","canvas4");
        } else if (arr[0] == "flow0" && arr[1] == "flow3") {
            createfDiv("Flow0", "Flow3","canvas2","canvas5");
        } else if (arr[0] == "flow1" && arr[1] == "flow2") {
            createfDiv("Flow1", "Flow2","canvas4","canvas5");
        } else if (arr[0] == "flow1" && arr[1] == "flow3") {
            createfDiv("Flow1", "Flow3","canvas4","canvas5");
        } else if (arr[0] == "flow2" && arr[1] == "flow3") {
            createfDiv("Flow2", "Flow3","canvas4","canvas5");
        }
    }
}

//function hideDiv(id1, id2) {
//    document.getElementById("cpu0").style.display = "";
//    document.getElementById("cpu1").style.display = "";
//    document.getElementById("mem0").style.display = "";
//    document.getElementById("mem1").style.display = "";
//    document.getElementById(id1).style.display = "none";
//    document.getElementById(id2).style.display = "none";
//    getLineData2();
//    $("a.close").click();
//}

function createDiv(id1, id2,cid1,cid2) {
    //alert("create");
    var innerHTML = "<div class='col-lg-12'>\n\
                                    <div class='databox databox-xlg databox-graded databox-shadowed 'id={0}>\n\
                                    <div class='databox-stat radius-bordered'>\n\
                                    <div class='stat-text'>{4}趋势图</div></div>\n\
                                    <div style='width:100%'>\n\
                                    <div><canvas id={1} height='100' width='800'>\n\
                                    </canvas>\n\
                                    </div></div></div></div>\n\
                                     <div class='col-lg-12'>\n\
                                    <div class='databox databox-xlg databox-graded databox-shadowed 'id={2}>\n\
                                    <div class='databox-stat radius-bordered'>\n\
                                    <div class='stat-text'>{5}趋势图</div></div>\n\
                                    <div style='width:100%'>\n\
                                    <div><canvas id={3} height='100' width='800'>\n\
                                    </canvas>\n\
                                    </div></div></div></div>".format(id1,cid1,id2,cid2,id1,id2);
    //alert(innerHTML);
    document.getElementById("insert_chart").innerHTML=innerHTML;
    getLineData2(cid1,cid2);
    $("a.close").click();
}

function createfDiv(id1, id2,cid1,cid2) {
    //alert("create");
    var innerHTML = "<div class='col-lg-12'>\n\
                                    <div class='databox databox-xlg databox-graded databox-shadowed 'id={0}>\n\
                                    <div class='databox-stat radius-bordered'>\n\
                                    <div class='stat-text'>{4}趋势图</div></div>\n\
                                    <div style='width:100%'>\n\
                                    <div><canvas id={1} height='100' width='800'>\n\
                                    </canvas>\n\
                                    </div></div></div></div>\n\
                                     <div class='col-lg-12'>\n\
                                    <div class='databox databox-xlg databox-graded databox-shadowed 'id={2}>\n\
                                    <div class='databox-stat radius-bordered'>\n\
                                    <div class='stat-text'>{5}趋势图</div></div>\n\
                                    <div style='width:100%'>\n\
                                    <div><canvas id={3} height='100' width='800'>\n\
                                    </canvas>\n\
                                    </div></div></div></div>".format(id1,cid1,id2,cid2,id1,id2);
    //alert(innerHTML);
    document.getElementById("insert_fchart").innerHTML=innerHTML;
    getLineData2(cid1,cid2);
    $("a.close").click();
}

//function createaDiv(id1,cid1) {
//    //alert("create");
//    var innerHTML = "<div class='col-lg-12'>\n\
//                                    <div class='databox databox-xlg databox-graded databox-shadowed 'id={0}>\n\
//                                    <div class='databox-stat radius-bordered'>\n\
//                                    <div class='stat-text'>{2}趋势图</div></div>\n\
//                                    <div style='width:100%'>\n\
//                                    <div><canvas id={1} height='100' width='800'>\n\
//                                    </canvas>\n\
//                                    </div></div></div></div>".format(id1,cid1,id1);
//    //alert(innerHTML);
//    document.getElementById("insert_fchart").innerHTML=document.getElementById("insert_fchart").innerHTML+innerHTML;
//    getaLineData2(cid1);
//    $("a.close").click();
//}

String.prototype.format=function()  
{  
  if(arguments.length==0) return this;  
  for(var s=this, i=0; i<arguments.length; i++)  
    s=s.replace(new RegExp("\\{"+i+"\\}","g"), arguments[i]);  
  return s;  
};  

