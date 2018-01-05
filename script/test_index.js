$(document).ready(function () {
    sessionStorage.setItem("url",window.location.href);
    $("#chapter").click(function(){
        var n = this.id;
        window.location.href=n+".php";
    });
    $("#exam").click(function(){
        ex__("exam.php","buy_exam");
    });

    $("#act").click(function(){
        window.location.href="robot/JB3208T";
    });
    $("#identify").click(function(){
        ex_("test.php?id=000s","buy");
    });
    $("#oral").click(function(){
        ex_("test.php?id=000k","buy");
    });
    $("#finger").click(function(){
        ex_("test.php?id=000z","buy");
    });
    $("#btn_try").click(function(){
        $("#buy").modal("hide");
        window.location.href=sessionStorage.url;
    });
    $("#btn_buy_act").click(function(){
        window.location.href="buy.php";
    });
    $("#btn_exam_cancel").click(function(){
        $("#buy_exam").modal("hide");
    });
});

function ex_(u,tip_id){
    $.ajax({
        url: "include/check_login.php",
        type: "get",
        data: '',
        async: false,
        success: function (data) {
            r = JSON.parse(data);
            if (r["status"] === "no") {
                sessionStorage.setItem("url", window.location.href);
                window.location.href= "login_page.php"
            }
            else {
                if((r["priv"]!==null && r["priv"].indexOf("E")>=0)){
                    window.location.href = u;
                }
                else{
                    sessionStorage.url = u;
                    $("#"+tip_id).modal("show");
                }
            }
        }
    });
}

function ex__(u,tip_id){
    $.ajax({
        url: "include/check_login.php",
        type: "get",
        data: '',
        async: false,
        success: function (data) {
            r = JSON.parse(data);
            if (r["status"] === "no") {
                sessionStorage.setItem("url", window.location.href);
                window.location.href= "login_page.php"
            }
            else {
                if((r["priv"]!==null && r["priv"].indexOf("D")>=0)){
                    window.location.href = u;
                }
                else{
                    sessionStorage.url = u;
                    $("#"+tip_id).modal("show");
                }
            }
        }
    });
}

