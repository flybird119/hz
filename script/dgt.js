$(document).ready(function () {
    id_stat=0;
    mb_stat=0;
    addr_stat=0;
    des_stat=0;
    name_stat=0;
    $("#dgt_back").click(function () {
        window.history.back();
    });
    $("#dgt_go").click(function () {
        window.location.href="dgt_apply.php"
    });
    $("#dgt_cancel").click(function () {
        var r = window.confirm("确定要退出吗？");
        if(r===true){
            window.location.href="member.php";
        }
    });
    $.base64.utf8encode = true;
    $("#dgt_sub").click(function () {
        if(id_stat && mb_stat && addr_stat && des_stat &&name_stat){
            $.ajax({
                url : "dgt.php",
                type : "post",
                data : {
                    mb: $("#dgt_mb").val(),
                    uname:$.base64.encode($("#dgt_name").val()),
                    addr:$.base64.encode($("#dgt_addr").val()),
                    id:$("#dgt_id").val(),
                    des:$.base64.encode($("#dgt_des").val()),
                    code:$("#dgt_code").val()
                },
                async : false,
                success : function(data) {
                    var result = JSON.parse(data);
                    if(result["status"]==="no"){
                        alert(result["err"]);
                    }
                    else{
                        alert(result["err"]);
                        window.location.href="member.php";
                    }
                }
            });
        }else{
            alert("请输入正确的数据然后提交");
        }
    });


    $("#dgt_id").blur(function(){
        var id =this.value;
        var re = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
        if(input_check(re,id,"身份证号码错误","dgt_id")){
            id_stat=1;
        }else{
            id_stat=0;
        }
    });

    $("#dgt_name").blur(function(){
        var name =this.value;
        var re = /^[\u4E00-\u9FA5]{2,4}$/;
        if(input_check(re,name,"姓名必须2-4个汉字","dgt_name")){
            name_stat=1;
        }else{
            name_stat=0;
        }
    });

    $("#dgt_mb").blur(function(){
        var mobile =this.value;
        var re = /^0?(13|14|15|17|18)[0-9]{9}$/;
        if(input_check(re,mobile,"手机号码非法，请重新输入","dgt_mb")){
            mb_stat=1;
        }else{
            mb_stat=0;
        }
    });

    $("#dgt_addr").blur(function(){
        var addr =this.value;
        var re = /^[\u4E00-\u9FA5A-Za-z0-9]{8,50}$/;
        if(input_check(re,addr,"地址太短或非法","dgt_addr")){
            addr_stat=1;
        }else{
            addr_stat=0;
        }
    });

    $("#dgt_des").blur(function(){
        var des =this.value;
        if(des.length>100){
            des_stat=1;
        }else{
            des_stat=0;
        }
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


