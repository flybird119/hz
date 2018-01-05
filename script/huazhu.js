$(document).ready(function () {
    $("#code").click(function () {
        document.getElementById('code').src = 'code.php?r=' + Math.random();
    });

    $("#submit_login").click(function () {
        $.ajax({
            url: "include/login.php",
            type: "post",
            data: {
                mb: $("#mb_login").val(),
                pwd: $("#pwd_login").val(),
                code: $("#code_login").val(),
            },
            async: false,
            success: function (result) {
                document.getElementById("err_txt").innerText = JSON.parse(result)["err"];
                document.getElementById('code').src = 'code.php?r=' + Math.random();
                $("#err_div").removeClass("hidden");
                r=JSON.parse(result);
                if (r["status"] === "yes") {
                    $('#login').modal('hide');
                    clear_login_form();
                    if(sessionStorage.getItem("url")){
                        window.location.href = sessionStorage.getItem("url");
                    }else{
                        window.location.href = "test_online.php";
                    }

                }
            }
        });
    });

    $("#btn_go_sign").click(function () {
        window.location.href = "sign.php";
        sessionStorage.setItem("url",window.location.href);
    });

    $("#mb_login").blur(function(){
        var mobile =this.value;
        var re = /^0?(13|14|15|17|18)[0-9]{9}$/;
        input_check(re,mobile,"手机号码非法，请重新输入");
    });

    $("#btn_buy").click(function(){
        window.location.href="buy.php";
    });

    $("#btn_cancel").click(function(){
        $("#buy").modal("hide");
    });
});

function input_check(re,str,tip){
    if(!re.test(str)){
        document.getElementById("err_txt").innerText = tip;
        $("#err_div").removeClass("hidden");
    }else{
        $("#err_div").addClass("hidden");
    }
}

function clear_login_form(){
    document.getElementById("mb_login").value = "";
    document.getElementById("pwd_login").value = "";
    document.getElementById("code_login").value = "";
}

