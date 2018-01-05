$(document).ready(function () {
    var mb_stat=0;
    var pwd_stat = 0;
    $(".btn_get_valid").click(function(){
        if(mb_stat && pwd_stat){
            $.ajax({
                url : "include/sms.php",
                type : "post",
                data : {
                    mb: $("#mb_sign").val()
                },
                async : false,
                success : function(data) {
                    var result = JSON.parse(data);
                    alert(result["msg"]);

                }
            });
        }else{
            alert("电话号码或密码不符合规定");
        }
    });

    $(".btn_sign").click(function () {
        if(mb_stat && pwd_stat){
            $.ajax({
                url : "include/sign.php",
                type : "post",
                data : {
                    mb: $("#mb_sign").val(),
                    pwd: $("#pwd_sign").val(),
                    code: $("#code_sign").val()
                },
                async : false,
                success : function(data) {
                    var result = JSON.parse(data);
                    if(result["status"]==="no"){
                        document.getElementById("err_txt").innerText = result["err"];
                        $("#err_div").removeClass("hidden");
                    }
                    else{
                        alert(result["err"]);
                        clear_value();
                        $("#err_div").addClass("hidden");
                        url=sessionStorage.getItem("url");
                        if(url){
                            window.location.href=url;
                        }
                        else{
                            window.location.href="chapter.php";
                        }

                    }
                }
            });
        }else{
            alert("电话号码或密码不符合规定");
        }


    });

    $("#mb_sign").blur(function(){
        var mobile =this.value;
        var re = /^0?(13|14|15|17|18)[0-9]{9}$/;
        if(input_check(re,mobile,"手机号码非法，请重新输入")){
            mb_stat=1;
        }
    });

    $("#pwd_sign").blur(function(){
        var pwd =this.value;
        var re = /^[a-zA-Z\d_]{8,}$/;
        if(input_check(re,pwd,"密码最少8位，字母数字组合")){
            pwd_stat=1;
        }
    });
});

function input_check(re,str,tip){
    if(!re.test(str)){
        document.getElementById("err_txt").innerText = tip;
        $("#err_div").removeClass("hidden");
        return false;
    }else{
        $("#err_div").addClass("hidden");
        return true;
    }
}

function clear_value(){
    document.getElementById("mb_sign").value = "";
    document.getElementById("pwd_sign").value = "";
    document.getElementById("code_sign").value = "";
}