$(document).ready(function () {
    $(".catagory").click(function () {
        var tmp = this.id.substr(2,4);
        $.ajax({
            url : "include/check_login.php",
            type : "get",
            data : '',
            async : false,
            success : function(data) {
                r = JSON.parse(data);
                if(r["status"]==="no"){
                    sessionStorage.setItem("url","test.php?id=" + tmp);
                    $("#login").modal("show");
                }
                else{
                    if((r["priv"]!==null && r["priv"].indexOf("C")>=0) || tmp==="0101"){
                        window.location.href="test.php?id=" + tmp;
                    }
                    else{
                        $("#buy").modal("show");
                    }

                }
            }
        });
    });

});



