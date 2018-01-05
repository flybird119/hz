$(document).ready(function () {
    player = new CloudVodPlayer();
    player.init({uu:"hg9fnfcvyn",vu:"5b0958fded",autoSize:1,control:1,dfull:0,changeParent:1,loadingurl:"",posterType:"3",pic:"./img/video_skin.png"},'pplayer');

    $(".tab_menu").click(function(){
        this.addClass("bg_red_light");
    });

    $(".catagory").click(function(){
        var pre ="#list_"+this.id;
        $(pre).slideToggle("slow");
    });

    $(".list_div").click(function(){
        var tmp = this.id;
        $.ajax({
            url : "include/check_login.php",
            type : "get",
            data : '',
            async : false,
            success : function(data) {
                if(JSON.parse(data)["status"]==="no"){
                    $("#login").modal("show");
                }
                else{
                    $.get("video_path.php?id="+tmp, function(result){
                        var r= JSON.parse(result);
                        if(r["stat"]==="no"){
                            $("#buy").modal("show");
                        }else{
                             var xx = JSON.parse(result)['path'];
                             player.sdk.playNewId({vu:xx});
                        }

                    });
                }
            }
        });

    });

});

