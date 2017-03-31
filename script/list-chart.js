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
    getAlertData();
});

function getAlertData() {
    $.ajax({
        type: "post",
        url: "../index.php?c=home&a=getInfo",
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
            document.getElementById("alertrank1").style.width = alertrank - 10 + "%";
            setColor("alertrank1", alertrank - 10);
            document.getElementById("alertrank3").style.width = alertrank + "%";
            setColor("alertrank3", alertrank);
            document.getElementById("alertrank4").style.width = alertrank - 60 + "%";
            setColor("alertrank4", alertrank - 60);
            document.getElementById("alertrank5").style.width = alertrank - 80 + "%";
            setColor("alertrank5", alertrank - 80);
            for (var i = 0; i < 6; i++) {
                setInfo("alertnum"+i,alertnum);
                setInfo("alertinfo"+i,alertinfo);
                setInfo("ppinfo_num"+i, ppinfo_num);
                setInfo("ppinfo_type"+i, ppinfo_type);
                setInfo("ppinfo_site"+i, ppinfo_site);
                setInfo("ppinfo_ip"+i, ppinfo_ip);
                setInfo("ppinfo_use"+i, ppinfo_use);
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

function creatLine(id1, id2, id3) {
    var innerHtml = "<div><canvas id={0} height='350' width='800'></canvas>\n\
                                    </div>".format(id1);
    var innerHtml2 = "<div><canvas id={0} height='350' width='800'></canvas>\n\
                                    </div>".format(id2);
    var innerHtml3 = "<div><canvas id={0} height='350' width='800'></canvas>\n\
                                    </div>".format(id3);
    document.getElementById("line1").innerHTML = innerHtml;
    document.getElementById("line2").innerHTML = innerHtml2;
    document.getElementById("line3").innerHTML = innerHtml3;
    getLineData2("canvas3","canvas4","canvas5");
}

function creatLine2(id1, id2, id3) {
    var innerHtml = "<div><canvas id={0} height='350' width='800'></canvas>\n\
                                    </div>".format(id1);
    var innerHtml2 = "<div><canvas id={0} height='350' width='800'></canvas>\n\
                                    </div>".format(id2);
    var innerHtml3 = "<div><canvas id={0} height='350' width='800'></canvas>\n\
                                    </div>".format(id3);
    document.getElementById("line11").innerHTML = innerHtml;
    document.getElementById("line12").innerHTML = innerHtml2;
    document.getElementById("line13").innerHTML = innerHtml3;
    getLineData2("canvas0","canvas1","canvas2");
}

function getLineData2(id1,id2,id3) {
    $.ajax({
        type: "post",
        url: "../index.php?c=single&a=getlines",
        dataType: "json",
        data: {
        },
        async: true,
        success: function (data) {
            var ctx3 = document.getElementById(id1).getContext("2d");
            var ctx4 = document.getElementById(id2).getContext("2d");
            var ctx5 = document.getElementById(id3).getContext("2d");
            var randomNum = eval(data.num);
            var randomNum2 = eval(data.num2);
            var randomNum3 = eval(data.num3);
            var randomNum4 = eval(data.num4);
            var randomNum5 = eval(data.num5);
            var randomNum6 = eval(data.num6);
            setLine(ctx3, randomNum, randomNum2);
            setLine(ctx4, randomNum3, randomNum4);
            setLine(ctx5, randomNum5, randomNum6);
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
            var ctx = document.getElementById("canvas").getContext("2d");
            var ctx1 = document.getElementById("canvas1").getContext("2d");
            var ctx2 = document.getElementById("canvas2").getContext("2d");
            var randomNum = eval(data.num);
            var randomNum2 = eval(data.num2);
             var randomNum3 = eval(data.num3);
            var randomNum4 = eval(data.num4);
            var randomNum5 = eval(data.num5);
            var randomNum6 = eval(data.num6);
            
            setLine(ctx, randomNum, randomNum2);
            setLine(ctx1, randomNum3, randomNum4);
            setLine(ctx2, randomNum5, randomNum6);
        },
        error: function () {
            alert('获取数据失败!');
        }
    });
}

function setLine(ctx, data, data2) {
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

String.prototype.format = function ()
{
    if (arguments.length == 0)
        return this;
    for (var s = this, i = 0; i < arguments.length; i++)
        s = s.replace(new RegExp("\\{" + i + "\\}", "g"), arguments[i]);
    return s;
};
