$(document).ready(function () {
    $(".btn_spr").click(function(){
        var cc =$(".ip").val();
        var code = $("#ccc").val();
        if(cc===""){
            alert("请输入内容！");
            return;
        }
        if(code===""){
            alert("必须输入验证码");
            return;
        }
        $.ajax({
            url : "include/feedback.php",
            type : "post",
            data : {
                content: cc,
                code:code
            },
            async : false,
            success : function(data) {
                var result = JSON.parse(data);
                alert(result["err"]);
                if(result.status==='yes'){
                    window.location.href="member.php";
                }
            }
        });

    });


    $(".btn_cls").click(function(){
        clear_value();
    });
});



function clear_value(){
   $(".ip").val('');
   $("#ccc").val('');
}