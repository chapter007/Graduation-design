//处理menu为active
$(document).ready(function(){
    var reg = new RegExp("(^|&)c=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null && r.length > 0){
        var c = unescape(r[2]);
        $("._"+c).attr("class", "active");
    }
});