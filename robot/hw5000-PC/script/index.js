$(document).ready(function(){

    $(window).resize(function() {
        //alert($(document.body).width());
        //alert($(document.body).width()*0.75+"px");
        $('.screen_txt').css({'width':$(document.body)*0.75+"px"});
    });

    $(".cir_pink").mouseover(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/cir_1_"+tmp.substr(2,2)+".png");
    });

    $(".cir_pink").mouseout(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/cir_0_"+tmp.substr(2,2)+".png");
    });

    $(".cir_pink").mousedown(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/cir_2_"+tmp.substr(2,2)+".png");
    });

    $(".cir_pink").mouseup(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/cir_1_"+tmp.substr(2,2)+".png");
    });


    $(".btn_blue").mouseover(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/btn_1_"+tmp.substr(2,2)+".png");
    });

    $(".btn_blue").mouseout(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/btn_0_"+tmp.substr(2,2)+".png");
    });

    $(".btn_blue").mousedown(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/btn_2_"+tmp.substr(2,2)+".png");
    });

    $(".btn_blue").mouseup(function() {
        var tmp = this.id;
        $($(this).find("img")[0]).attr('src',"./img/btn_1_"+tmp.substr(2,2)+".png");
    });

    $(".btn_blue").click(function() {
        alert("click");
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