$(document).ready(function () {
    sessionStorage.bcar=0;
    $(".c_price_0").click(
        function(){
            if(sessionStorage.bcar !== this.id){
                $("#"+sessionStorage.bcar).removeClass("c_price_1");
                $(this).addClass("c_price_1");
            }
            sessionStorage.bcar=this.id;
        });
});


$(".btn_buy").click(function () {
    var tmp = this.id;
    $.ajax({
        url: "../include/check_login.php",
        type: "get",
        data: '',
        async: false,
        success: function (data) {
           var r = JSON.parse(data);
            if (r["status"] === "no") {
                sessionStorage.url= window.location.href;
                $("#login").modal("show");
            }
            else {
                window.location.href="pay/index.php?id="+sessionStorage.bcar;
            }
        }
    });
});

