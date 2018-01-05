$(document).ready(function () {
    var mb_stat=0;
    var pwd_stat=0;
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
                    code: $("#code_sign").val(),
                    saler:$("#saler").text()
                },
                async : false,
                success : function(data) {
                    var result = JSON.parse(data);
                    if(result["status"]==="no"){
                        alert(result["err"]);
                    }
                    else{
                        alert(result["err"]);
                        clear_value();
                        url=sessionStorage.getItem("url");
                        if(url){
                            window.location.href=url;
                        }
                        else{
                            window.location.href="test_index.php";
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
        if(input_check(re,mobile,"手机号码非法，请重新输入","mb_sign")){
            mb_stat=1;
        }else{
            mb_stat=0;
        }
    });

    $("#pwd_sign").blur(function(){
        var pwd =this.value;
        var re = /^[a-zA-Z\d_]{8,}$/;
        if(input_check(re,pwd,"密码最少8位，字母数字组合","pwd_sign")){
            pwd_stat=1;
        }else{
            pwd_stat=0;
        }
    });

    $(".x").click(function () {
        window.close();
    });


});

function input_check(re,str,tip,id){
    var ele=$("#"+id);
    if(!re.test(str)){
        ele.attr("placeholder",tip);
        ele.addClass("errin");
        return false;
    }else{
        ele.removeClass("errin");
        ele.addClass("sucin");
        return true;

    }
}

function clear_value(){
    document.getElementById("mb_sign").value = "";
    document.getElementById("pwd_sign").value = "";
    document.getElementById("code_sign").value = "";
}
