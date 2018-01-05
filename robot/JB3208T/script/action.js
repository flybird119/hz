$(document).ready(function(){

   $(".bg_btn").on("mouseenter",function(){
        $(this).removeClass("bg_btn_0");
        $(this).addClass("bg_btn_1");
    });

    $(".bg_btn").on("mouseout ",function(){
        $(this).removeClass("bg_btn_1");
        $(this).addClass("bg_btn_0");
    });

    $(".bg_btn").on("tap ",function(){
        alert("hgtrghrtgrt");
    });

    $(".bg_btn").on("touchstart ",function(){
        $(this).removeClass("bg_btn_0");
        $(this).addClass("bg_btn_1");
    });
    $(".bg_btn").on("touchend ",function(){
        $(this).removeClass("bg_btn_1");
        $(this).addClass("bg_btn_0");
    });


});