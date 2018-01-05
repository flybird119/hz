$(document).ready(function(){

    $(window).resize(function() {
        //alert($(document.body).width());
        //alert($(document.body).width()*0.75+"px");
        $('.screen_txt').css({'width':$(document.body)*0.75+"px"});
    });

    $(".cir_pink").click(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/cir_2_"+tmp.substr(2,2)+".png");
    });

    $(".cir_pink").mouseup(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/cir_1_"+tmp.substr(2,2)+".png");
    });


    $(".btn_blue").mouseenter(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/btn_2_"+tmp.substr(2,2)+".png");
    });

    $(".btn_blue").mouseleave(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/btn_1_"+tmp.substr(2,2)+".png");
    });



    $(".btn_lamp").mouseover(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/lamp_1_"+tmp.substr(2,2)+".png");
    });

    $(".btn_lamp").mouseout(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/lamp_0_"+tmp.substr(2,2)+".png");
    });

});