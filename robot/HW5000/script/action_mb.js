
$(document).ready(function () {
    man = new Robot();
    man.init();

    $(".btn_blue").on("touchstart ", function () {
        var id=this.id;
        var btn_id = id.split("_")[1];
        $("#blue_"+btn_id).find("img").attr("src", "img/btn_2_"+btn_id+".png");
    });
    $(".btn_blue").on("touchend ", function () {
        var id=this.id;
        var btn_id = id.split("_")[1];
        $("#blue_"+btn_id).find("img").attr("src", "img/btn_0_"+btn_id+".png");

        //取数字键ID，作为输入
        var x = this.id.substr(5, 2);
        if (man.stat.shield === 1 ) {//判断进入屏蔽菜单
            var z = parseInt(x.substr(1,1));
            if(man.stat.nc_flag===1&&man.res.shield_code.length<2){//判断输入类型，1为设备代码0为设备号
                if(z>3){
                    return;
                }
                man.res.shield_code += man.switch_shiled_inp(x,z);
                if(man.res.shield_code.length===2) {
                    man.res.shield_code += man.switch_shiled_code(man.res.shield_code);

                }
                man.draw_shield(man.res.shield_num, man.res.shield_code);
            }else{
                if(z>3||man.res.shield_num.length>7){
                    return;
                }
                man.res.shield_num += man.switch_shiled_inp(x,z);
                man.draw_shield(man.res.shield_num,man.res.shield_code);s
            }
        }
    });

    $(".red").on("touchstart ", function () {
        var id=this.id;
        var btn_id = id.split("_")[1];
        $("#red_"+btn_id).removeClass("red_"+btn_id+"_0");
        $("#red_"+btn_id).addClass("red_"+btn_id+"_2");
    });

    $(".red").on("touchend ", function () {
        var id=this.id;
        var btn_id = id.split("_")[1];
        $("#red_"+btn_id).removeClass("red_"+btn_id+"_2");
        $("#red_"+btn_id).addClass("red_"+btn_id+"_0");
    });


    $(".mul_red").on("touchstart ", function () {
        var id=this.id;
        $("#"+id).find("img").attr("src", "img/mul_red_1.png");
    });

    $(".mul_red").on("touchend ", function () {
        var id = this.id;
        $("#" + id).find("img").attr("src", "img/mul_red_0.png");
        if(man.stat.mul_start ===1){
            var mul_id = parseInt(id.substr(-2,1));
            var start_id = parseInt(id.substr(-2,2));
            var feedback_id = start_id+1;
            var err_id = start_id+2;
            if(man.stat["mul_"+mul_id] === 0){
                man.stat["mul_"+mul_id]=1;
                man.turn_mul("mul_"+start_id,1);
                setTimeout(man.turn_mul,1000,"mul_"+feedback_id,1);
            }else{
                man.stat["mul_"+mul_id]=0;
                man.turn_mul("mul_"+feedback_id,0);
                setTimeout(man.turn_mul,1000,"mul_"+start_id,0);
            }

        }else{

        }



    });

    $("#blue_11").on("touchend ", function () {
        if(man.stat.reset===1 ||man.stat.shield===1){
            return;
        }
        if(man.scrn.rec_check.menu_show===1){
            man.scrn.rec_check.menu_show=0;
            man.draw_his_rec_list();
            man.scrn.rec_check.his_rec_list=1;
            return;
        }
        if( man.scrn.self_check.menu_show===0 ){
            man.scrn.self_check.menu_show=1;
            man.draw_self_check();
        }else{
            man.stat.self_check=1;
            man.scrn.self_check.menu_show=0;
            man.play_sc();
            man.draw_ani();
            return;
        }


    });

    $("#blue_14").on("touchend ", function () {
        if(man.stat.set_start_mod===1){
            man.scrn.start_mod.index= Math.abs(man.scrn.start_mod.index-1);
            man.draw_start_mod();
        }
        if(man.stat.shield===1){//屏蔽菜单下
            if(man.stat.nc_flag===0){
                man.stat.nc_flag=1;//nc_flag为1，为输入屏蔽代码
            }else {
                man.stat.nc_flag=0;//nc_flag为1，为输入屏蔽代码
            }

            man.draw_shield(man.res.shield_num,man.res.shield_code);
        }
    });


    $("#blue_15").on("touchend ", function () {
        if(man.stat.set_start_mod===1){
            man.switch_start_mod();
        }
    });


    $("#blue_21").on("touchend ", function () {
        if(man.ck_stat()){
            return;
        }
        if(man.stat.shield===1){
            return;
        }
        if(man.scrn.rec_check.his_rec_list===1){
            man.scrn.rec_check.his_rec_list=0;
            man.draw_his_rec();
            man.scrn.rec_check.menu_show=1;
            return;
        }
        if(man.scrn.self_check.menu_show===1){
            man.stat.self_check=0;
            man.scrn.self_check.menu_show=0;
            man.init();
            return;
        }
        if(man.scrn.rec_check.menu_show===1){
            man.scrn.rec_check.menu_show=0;
            man.init();
            return;
        }
        man.stat.shield=1;
        man.draw_shield(man.res.shield_num,man.res.shield_code);
    });

    $("#blue_22").on("touchend ", function () {
        if(man.ck_stat()){
            return;
        }
        if(man.stat.shield===1){
            return;
        }
        if(man.scrn.rec_check.his_rec_list===1){
            man.scrn.rec_check.his_rec_list=0;
            man.draw_his_rec();
            man.scrn.rec_check.menu_show=1;
            return;
        }
        if(man.scrn.self_check.menu_show===1){
            man.stat.self_check=0;
            man.scrn.self_check.menu_show=0;
            man.init();
            return;
        }
        if(man.scrn.rec_check.menu_show===1){
            man.scrn.rec_check.menu_show=0;
            man.init();
            return;
        }
        man.stat.shield_cancel=1;
        man.stat.shield=1;
        man.res.shield_num="";
        man.res.shield_code="";
        man.draw_shield(man.res.shield_num,man.res.shield_code);
    });

    $("#blue_25").on("touchend ", function () {
        if(man.stat.set_start_mod===1){
            man.switch_start_mod();
        }
    });



    $("#blue_34").on("touchend ", function () {
        if(man.ck_stat()){
            return;
        }
        man.draw_pwd_box();
        man.stat.pwd=1;
    });

    $("#blue_35").on("touchend ", function () {
        if(man.ck_stat()){
            return;
        }
        if(man.stat.pwd===1){
            man.clear_timer();
            man.stat.set_start_mod=1;
            man.draw_start_mod();
            man.stat.pwd=0;
            return;
        }
        if(man.stat.set_start_mod===1){
            man.draw_clean_scrn();
            man.draw_header();
            man.draw_footer();
        }
        if(man.stat.shield_cancel===1){
            man.stat.shield=0;
            man.stat.shield_cancel=0;
            man.draw_clean_scrn();
            man.scrn_init();
        }
        if(man.stat.shield===1){
            man.stat.shield=0;
            man.draw_shield_srn(man.res.shield_num,man.res.shield_code);
        }
    });

    $("#blue_42").on("touchend ", function () {
        if(man.ck_stat()){
            return;
        }

        if(man.stat.shield===1){
            return;
        }
        if(man.scrn.rec_check.menu_show===0 ){
            man.scrn.rec_check.menu_show=1;
            man.draw_his_rec();
        }

    });

    $("#blue_45").on("touchend ", function () {
        if(man.ck_stat()){
            return;
        }
        if(man.scrn.rec_check.his_rec_list===1){
            man.scrn.rec_check.his_rec_list=0;
            man.draw_his_rec();
            man.scrn.rec_check.menu_show=1;
            return;
        }
        if(man.scrn.self_check.menu_show===1){
            man.stat.self_check=0;
            man.scrn.self_check.menu_show=0;
            man.init();
            return;
        }
        if(man.scrn.rec_check.menu_show===1){
            man.scrn.rec_check.menu_show=0;
            man.init();
            return;
        }

        if(man.stat.shield_cancel===1||man.stat.shield===1){
            man.stat.shield_cancel=0;
            man.stat.shield=0;
            man.init();
            return;
        }
    });


    $(".m_key").on("touchend ", function () {
        man.turn_mul_key();
    });

    $(".m_selfcheck").on("touchstart", function () {
        var id=this.id;
        $(this).find("img").attr("src", "img/"+id+"_1.png");
    });

    $(".m_selfcheck").on("touchend ", function () {
        var id=this.id;
        $(this).find("img").attr("src", "img/"+id+"_0.png");

    });

    $("#red_11").on("touchend ", function () {
        man.stop_snd();
    });

    $("#red_12").on("touchend ", function () {
       if(man.stat.alarm===1){
           man.stat.alarm=0;
           man.stop_snd();
       }else{
           man.stat.alarm=1;
           man.play_alarm();
       }
    });

    $("#red_14").on("touchend ", function () {
        man.stat.reset=1;
        man.reset();
    });

    $("#blue_32").on("touchend ", function () {
    });

});


function Robot(){
    this.res = {ctx: null, shield_num: "",shield_code:""};
    this.stat={
        mul_start:0,mul_1:0, mul_2:0, mul_3:0, mul_4:0, mul_5:0, mul_6:0, alarm:0,
        self_check:0,pwd:0,set_start_mod:0,his_rec:0,shield:0,nc_flag:0,shield_cancel:0
    };
    this.lamp = {
        lamp_11:0,lamp_12:0,lamp_13:0,lamp_14:0,lamp_15:0,
        lamp_21:0,lamp_22:0,lamp_23:0,lamp_24:0,lamp_25:0,
        lamp_31:0,lamp_32:0,lamp_33:1,lamp_34:0,lamp_35:0,
        lamp_41:0,lamp_42:1,lamp_43:0,lamp_44:0,lamp_45:0
    };
    this.mul={
        mul_11:0,mul_12:0,mul_13:0,
        mul_21:0,mul_22:0,mul_23:0,
        mul_31:0,mul_32:0,mul_33:0,
        mul_41:0,mul_42:0,mul_43:0,
        mul_51:0,mul_52:0,mul_53:0,
        mul_61:0,mul_62:0,mul_63:0
    };
    this.scrn={
        start_mod:{manual:1,auto:0,index:0},
        self_check:{menu_show:0},
        rec_check:{menu_show:0,menu_index:0,rec:[
            {id:"000000",msg:"喷洒允许",stat:"设置"},
            {id:"000001",msg:"自动禁止",stat:"设置"},
            {id:"000002",msg:"手动禁止",stat:"设置"},
            {id:"000003",msg:"光柵测温",stat:"屏蔽"},
            {id:"000004",msg:"注册设备",stat:"操作"},
            {id:"000005",msg:"注册示盘",stat:"操作"},
            {id:"000006",msg:"消防广播",stat:"启动"}
        ],his_rec_list:0}
    };
    this.timer={
        scrn:[],lamp:[],normal:[]
    };

    this.stat.w = this.get_width();
    this.stat.h = this.get_height();
    this.ctx = this.get_ctx();
}

Robot.prototype.ck_stat=function () {
  return this.stat.self_check===1 || this.stat.reset===1;
};



Robot.prototype.turn_mul_key = function(){
    if(this.stat.mul_start === 0){
        this.stat.mul_start = 1;
        $(".m_key").find("img").attr("src", "img/key_1.png");
        $(".m_work").find("img").attr("src","./img/mul_work_1.png");
    }else{
        this.stat.mul_start =0;
        $(".m_key").find("img").attr("src", "img/key_0.png");
        $(".m_work").find("img").attr("src","./img/mul_work_0.png");

    }
};

Robot.prototype.clear_timer = function(){
    for(var i in this.timer){
        for(var j in this.timer[i]){
            clearTimeout(this.timer[i][j]);
        }
    }

};



Robot.prototype.turn_lamp = function(ele,flag){
    var idd = "#"+ele;
    var id = ele.split("_")[1];
    if(flag===1){
        $(idd).find("img").attr("src", "img/lamp_1_"+id+".png");
    }else{
        $(idd).find("img").attr("src", "img/lamp_0_"+id+".png");
    }
};


Robot.prototype.turn_mul = function(ele,flag){
    var id ="#"+ele;
    var tmp= parseInt(ele.substr(-1,1));
    if(flag===1){
        if(tmp===1){
            $(id).find("img").attr("src", "./img/start_1.png");
        }else if (tmp===2){
            $(id).find("img").attr("src", "./img/feedback_1.png");
        }else{
            $(id).find("img").attr("src", "./img/err_1.png");
        }
    }else{
        if(tmp===1){
            $(id).find("img").attr("src", "./img/start_0.png");
        }else if (tmp===2){
            $(id).find("img").attr("src", "./img/feedback_0.png");
        }else{
            $(id).find("img").attr("src", "./img/err_0.png");
        }
    }
};
Robot.prototype.turn_all_mul = function(flag){
    for(var i in this.mul){
        this.turn_mul(i,flag);
    }
};

Robot.prototype.turn_all_lamp = function(flag){
    for(var i in this.lamp){
        this.turn_lamp(i,flag);
    }
};


Robot.prototype.init = function(){
     this.lamp_init();
     this.mul_init();
     this.scrn_init();
     this.snd_init();
};


Robot.prototype.get_width = function(){
    return $(".screen").width();
};

Robot.prototype.get_height = function(){
    return $(".screen").height();
};

Robot.prototype.get_ctx = function(){
    $(".screen").html("<canvas id='can_top' width='" + this.stat.w + "' height='" + this.stat.h + "'/>");
    var c = document.getElementById("can_top");
    var ctx = c.getContext("2d");
    ctx.fillStyle = "#fff";
    ctx.font = "12px 微软雅黑";
    ctx.strokeStyle = "#666";
    return ctx;
};

Robot.prototype.lamp_init = function(){
    for(var i in this.lamp){
        if(this.lamp[i]===1){
            this.turn_lamp(i,1);
        }else{
            this.turn_lamp(i,0);
        }
    }
};

Robot.prototype.mul_init = function(){
    for(var i in this.mul){
        if(this.mul[i]===1){
            this.turn_mul(i,1);
        }else{
            this.turn_mul(i,0);
        }
    }
};


Robot.prototype.scrn_init = function(){
    this.draw_clean_scrn();
    this.draw_header();
    this.draw_footer();

};

Robot.prototype.draw_header = function(){
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    ctx.font = "bold 20px 微软雅黑";
    ctx.fillText("GST",0,25);
    ctx.font = "bold 12px 微软雅黑";
    var ver_str ="GST5000 V1.2";
    var comp_str = "GULF SECURITY TECH CO., LTD.";
    var l = ctx.measureText(ver_str).width;
    ctx.fillText(ver_str,w-l-25,30);
    ctx.font = "bold 12px 微软雅黑";
    ctx.fillText(comp_str,0,45);
    ctx.moveTo(0,33);
    ctx.lineTo(w,33);
    ctx.lineWidth=2;
    ctx.strokeStyle="#fff";
    ctx.stroke();
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};

Robot.prototype.draw_title_header = function(title_str){
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    ctx.font = "bold 12px 微软雅黑";

    ctx.fillText(title_str,100,25);
    ctx.moveTo(0,33);
    ctx.lineTo(w,33);
    ctx.lineWidth=2;
    ctx.strokeStyle="#fff";
    ctx.stroke();
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};

Robot.prototype.snd_init=function () {
    if(this.stat.alarm===0){
        this.stop_snd();
    }else{
        this.play_alarm();
    }
};



Robot.prototype.draw_footer = function(){
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    ctx.moveTo(0,h-20);
    ctx.lineTo(w,h-20);
    ctx.lineWidth=2;
    ctx.strokeStyle="#fff";
    ctx.stroke();
    ctx.font = "bold 12px 微软雅黑";
    ctx.fillStyle = "#fff";
    var l = ctx.measureText("自动禁止").width;
    if (this.scrn.start_mod.manual === 1) {
        ctx.fillText("手动允许",(w/4-l)/2,h-5);
    } else{
        ctx.fillText("手动禁止",(w/4-l)/2,h-5);
    }

    if (this.scrn.start_mod.auto === 1) {
        ctx.fillText("部分允许",(w/4-l)/2+(w/4),h-5);
    } else if(this.scrn.start_mod.auto === 2){
        ctx.fillText("全部允许",(w/4-l)/2+(w/4),h-5);
    }
    else{
        ctx.fillText("自动禁止",(w/4-l)/2+(w/4),h-5);
    }

    ctx.fillText("喷洒允许",(w/4-l)/2+(w/4)*2,h-5);
    ctx.fillText("监控状态",(w/4-l)/2+(w/4)*3,h-5);
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};


Robot.prototype.draw_pwd_box = function(){
    this.draw_clean_scrn();
    this.draw_header();
    this.draw_footer();
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    var p = 90;
    var he = 20;
    ctx.font = "bold 12px 微软雅黑";
    var l = ctx.measureText("输入密码:").width;
    ctx.fillText("输入密码:",(w-l-p)/2,h/2-5);
    ctx.fillRect((w-l-p)/2+l+10,(h)/2-he,p,he);
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};

Robot.prototype.draw_clean_scrn = function () {
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    ctx.fillStyle="#7a84fb";
    ctx.fillRect(0,0,w,h);
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};




Robot.prototype.draw_start_mod = function () {
    this.draw_clean_scrn();
    this.scrn_init();
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    ctx.font = "bold 12px 微软雅黑";
    ctx.fillText("设置启动方式",50,70);
    ctx.fillText("手动方式:",78,h/2);
    ctx.fillText("自动方式:",78,h/2+30);
    ctx.fillText("提示方式:",78,h/2+60);
    ctx.fillText("无",78+100,h/2+60);
    switch(this.scrn.start_mod.index) {
        case 0:
            ctx.fillStyle = "#fff";
            ctx.fillRect(76 + 90, h / 2 - 15, 70, 20);
            ctx.fillStyle = "#7a84fb";
            if (this.scrn.start_mod.manual === 1) {
                ctx.fillText("允许", 78 + 100, h / 2);
            } else{
                ctx.fillText("不允许", 78 + 100, h / 2);
            }
            ctx.fillStyle = "#fff";
            if (this.scrn.start_mod.auto === 1) {
                ctx.fillText("部分自动", 78 + 100, h / 2+30);
            } else if(this.scrn.start_mod.auto === 2){
                ctx.fillText("全部自动", 78 + 100, h / 2+30);
            }
            else{
                ctx.fillText("不允许", 78 + 100, h / 2+30);
            }
            break;
        case 1:
            ctx.fillStyle = "#fff";
            if (this.scrn.start_mod.manual === 1) {
                ctx.fillText("允许", 78 + 100, h / 2);
            } else{
                ctx.fillText("不允许", 78 + 100, h / 2);
            }
            ctx.fillRect(76 + 90, h / 2 - 15 + 30, 70, 20);
            ctx.fillStyle = "#7a84fb";
            if (this.scrn.start_mod.auto === 1) {
                ctx.fillText("部分自动", 78 + 100, h / 2+30);
            } else if(this.scrn.start_mod.auto === 2){
                ctx.fillText("全部自动", 78 + 100, h / 2+30);
            }
            else{
                ctx.fillText("不允许", 78 + 100, h / 2+30);
            }
            break;
        default:
            break;
    }
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};

Robot.prototype.switch_start_mod=function(){
    switch(this.scrn.start_mod.index){
        case 0:
            this.scrn.start_mod.manual=Math.abs(this.scrn.start_mod.manual-1);
            this.draw_start_mod();
            break;
        case 1:
            this.scrn.start_mod.auto=Math.abs((this.scrn.start_mod.auto+1)%3);
            this.draw_start_mod();
            break;
        default:
            break;
    }
};

Robot.prototype.switch_shiled_inp=function(x,z){
    switch(parseInt(x.substr(0,1))) {
        case 1:
            return z;
        case 2:
            z=z+3;
            return z;
        case 3:
            z=z+6;
            return z;
        case 4:
            return 0;
        default:
            break;
    }
};


Robot.prototype.switch_shiled_code=function(x){
    switch(parseInt(x)) {
        case 1:
            return "-光栅测温";
        case 2:
            return "-点型感温";
        case 3:
            return "-点型感烟";
        default:
            return "-未定义";
    }
};



Robot.prototype.draw_self_check = function () {
    this.draw_clean_scrn();
    this.scrn_init();
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    ctx.font = "bold 12px 微软雅黑";
    ctx.fillText("自检操作选择",50,70);
    ctx.fillText("1.声光显示自检",90,h/2-15);
    ctx.fillText("2.声光警报自检",90,h/2);
    ctx.fillText("3.手动盘/多线制自检",90,h/2+15);
    ctx.fillText("4.总线设备自检",90,h/2+30);
    ctx.fillText("5.总线设备自检取消",90,h/2+45);
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};

Robot.prototype.draw_his_rec = function () {
    this.draw_clean_scrn();
    var str ="浏览运行记录";
    this.draw_title_header(str);
    this.draw_footer();
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    ctx.font = "bold 12px 微软雅黑";
    ctx.fillText("1.运行记录",120,h/2-30);
    ctx.fillText("2.操作记录",120,h/2);
    ctx.fillText("3.火警记录",120,h/2+30);
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};

Robot.prototype.draw_shield = function (num,code) {
    this.draw_clean_scrn();
    this.scrn_init();
    var tip = "输入屏蔽设备号";
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    ctx.font = "bold 12px 微软雅黑";
    (man.stat.nc_flag==0)?ctx.strokeStyle="#fff":ctx.strokeStyle="#7a84fb";
    ctx.strokeRect(w / 6 +tip.length*12, h / 2 - 6, 60, 20);
    (man.stat.nc_flag==0)?ctx.strokeStyle="#7a84fb":ctx.strokeStyle="#fff";
    ctx.strokeRect(w / 6 +tip.length*25, h / 2 - 6, 80, 20);
    ctx.fillText(tip,w/6-10,h/2+10);
    ctx.fillText(num, w/6+tip.length*12, h / 2+10);
    ctx.fillText("号",w/6+tip.length*22,h/2+10);
    ctx.font = "bold 12px 微软雅黑";
    ctx.fillText(code, w / 6 +tip.length*25, h / 2+10);
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};

Robot.prototype.draw_shield_srn = function (num,code) {
    this.draw_clean_scrn();
    this.draw_footer();
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    ctx.moveTo(0,40*2);
    ctx.lineTo(w,40*2);
    ctx.lineWidth=2;
    ctx.strokeStyle="#fff";
    ctx.stroke();
    var d = new Date();
    ctx.font = "bold 12px 微软雅黑";
    ctx.fillText("[屏 蔽] 总数：001",w/10,40*2-30);
    ctx.fillText("001",10,40*2-15);
    ctx.fillText(d.Format("hh:mm"),w/8, 40*2-15);
    ctx.fillText(num, w/4, 40*2-15);
    ctx.fillText(code, w / 2 , 40*2-15);
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};

Robot.prototype.draw_his_rec_list = function () {
    this.draw_clean_scrn();
    var str ="浏览运行记录";
    this.draw_title_header(str);
    this.draw_footer();
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    var d = new Date();
    ctx.font = "bold 12px 微软雅黑";
    ctx.fillStyle="#fff";
    var start_h=60;
    for(var i in this.scrn.rec_check.rec){
        ctx.fillText(d.Format("yyyy年MM月dd日 hh:mm"),0,start_h+i*20);
        ctx.fillText(this.scrn.rec_check.rec[i]["id"],w/2,start_h+i*20);
        ctx.fillText(this.scrn.rec_check.rec[i]["msg"],w/2+60,start_h+i*20);
        ctx.fillText(this.scrn.rec_check.rec[i]["stat"],w/2+130,start_h+i*20);
    }

    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};







Robot.prototype.draw_ani = function () {
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w = this.stat.w;
    var h = this.stat.h;
    for(var m=0;m<this.timer.scrn.length;m++){
        clearTimeout(this.timer.scrn[m]);
    }
    for(var i=0;i<w;i=i+20){
        this.timer.scrn[i]=setTimeout(this.__draw_a,i*50,ctx,w,h,i);
    }
    this.timer.scrn[++i]=setTimeout(this.stop_snd.bind(this),50*i,0);
    this.timer.scrn[++i]=setTimeout(this.turn_self_check.bind(this),50*i,0);
    this.__lamp_ani();
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;
};


Robot.prototype.__draw_a= function (ctx,w,h,i) {
    var left_ax =0-i%w;
    var right_ax =w-i%w;
    var left_bx = left_ax+w;
    var right_bx =right_ax+w;
    ctx.fillStyle="#7a84fb";
    ctx.fillRect(0,0,w,h);
    ctx.font = "bold 20px 微软雅黑";
    ctx.fillStyle="#fff";
    ctx.fillText("GST",left_ax,25);
    ctx.fillText("GST",left_bx,25);
    ctx.font = "bold 12px 微软雅黑";
    var ver_str ="GST5000 V1.2";
    var comp_str = "GULF SECURITY TECH CO., LTD.";
    var l = ctx.measureText(ver_str).width;
    ctx.fillText(ver_str,(w-l-25-i)%w,30);
    ctx.fillText(ver_str,(w-l-25-i)%w+w,30);
    ctx.font = "bold 12px 微软雅黑";
    ctx.fillText(comp_str,left_ax,45);
    ctx.fillText(comp_str,left_bx,45);
    ctx.beginPath();
    ctx.moveTo(left_ax,33);
    ctx.lineTo(right_ax,33);
    ctx.moveTo(left_bx,33);
    ctx.lineTo(right_bx,33);

    ctx.moveTo(left_ax,h-20);
    ctx.lineTo(right_ax,h-20);
    ctx.moveTo(left_bx,h-20);
    ctx.lineTo(right_bx,h-20);
    ctx.lineWidth=2;
    ctx.strokeStyle="#fff";
    ctx.stroke();
    ctx.font = "bold 12px 微软雅黑";
    var lw = ctx.measureText("自动禁止").width;
    ctx.fillText("自动禁止",((w/4-l)/2-i)%w,h-5);
    ctx.fillText("自动禁止",((w/4-l)/2-i)%w+w,h-5);
    ctx.fillText("手动允许",((w/4-l)/2+w/4-i)%w,h-5);
    ctx.fillText("手动允许",((w/4-l)/2+w/4-i)%w+w,h-5);
    ctx.fillText("喷洒允许",((w/4-l)/2+(w/4)*2-i)%w,h-5);
    ctx.fillText("喷洒允许",((w/4-l)/2+(w/4)*2-i)%w+w,h-5);
    ctx.fillText("监控状态",((w/4-l)/2+(w/4)*3-i)%w,h-5);
    ctx.fillText("监控状态",((w/4-l)/2+(w/4)*3-i)%w+w,h-5);
};

Robot.prototype.__lamp_ani=function(){
    for(var n=0;n<this.timer.lamp.length;n++){
        clearTimeout(this.timer.lamp[n]);
    }
    for(var i=0;i<5;i++){
        this.timer.lamp[i]=setTimeout(this.turn_all_lamp.bind(this),500*i,1);
        this.timer.lamp[i+5]=setTimeout(this.turn_all_lamp.bind(this),500*i+100,0);
    }
    for(var s in this.lamp){
        this.timer.lamp[++i]=setTimeout(this.turn_lamp.bind(this),2000+350*i,s,1)
        this.timer.lamp[++i]=setTimeout(this.turn_lamp.bind(this),2000+350*i,s,0)
    }
};

Robot.prototype.turn_self_check=function (i) {
   this.stat.self_check = i;
};


Robot.prototype.play_alarm=function () {
    $("#bg-music").attr('src',"./media/alarm.mp3");
    audioAutoPlay();
    musicPlay(true);
};

Robot.prototype.play_sc=function () {
    $("#bg-music").attr('src',"./media/sc.mp3");
    audioAutoPlay();
    musicPlay(true);
};



Robot.prototype.stop_snd=function () {
    $("#bg-music").attr('src',"");
    musicPlay(false);
};

Robot.prototype.mul_self_check=function () {
    $("#bg-music").attr('src',"");
    musicPlay(false);
};





Robot.prototype.reset=function () {
    this.clear_timer();
    this.stat.self_check=0;
    this.stop_snd();
    this.timer.normal[0]=setTimeout(this.turn_all_lamp.bind(this),1000,0);
    this.timer.normal[1]=setTimeout(this.close_scrn.bind(this),1000,0);
    this.timer.normal[2]=setTimeout(this.turn_all_mul.bind(this),1000,0);
    this.timer.normal[3]=setTimeout(this.turn_all_lamp.bind(this),2000,1);
    this.timer.normal[4]=setTimeout(this.turn_all_mul.bind(this),2000,1);
    this.timer.normal[5]=setTimeout(this.turn_all_lamp.bind(this),3000,0);
    this.timer.normal[6]=setTimeout(this.turn_all_mul.bind(this),3000,0);
    this.timer.normal[7]=setTimeout(this.turn_all_lamp.bind(this),4000,1);
    this.timer.normal[8]=setTimeout(this.turn_all_mul.bind(this),4000,1);
    this.timer.normal[9]=setTimeout(this.turn_all_lamp.bind(this),5000,0);
    this.timer.normal[10]=setTimeout(this.turn_all_mul.bind(this),5000,0);
    this.timer.normal[11]=setTimeout(this.init.bind(this),5500);
    this.timer.normal[11]=setTimeout(this.turn_reset.bind(this),5500,0);

};

Robot.prototype.turn_reset=function (i) {
    this.stat.reset=i;
};

Robot.prototype.close_scrn = function(){
    var ctx = this.ctx;
    var old_style = ctx.fillStyle;
    var old_font = ctx.font;
    var old_stroke = ctx.strokeStyle;
    var w=this.stat.w;
    var h = this.stat.h;
    ctx.fillStyle="#888";
    ctx.fillRect(0,0,w,h);
    ctx.fillStyle=old_style;
    ctx.font=old_font;
    ctx.strokeStyle = old_stroke;

};




function audioAutoPlay() {
    var audio = document.getElementById('bg-music');
    audio.play();
    document.addEventListener("WeixinJSBridgeReady", function () {
        audio.play();
    }, false);
}

// 音乐播放
function autoPlayMusic() {
    // 自动播放音乐效果，解决浏览器或者APP自动播放问题
    function musicInBrowserHandler() {
        musicPlay(true);
        document.body.removeEventListener('touchstart', musicInBrowserHandler);
    }

    document.body.addEventListener('touchstart', musicInBrowserHandler);

    // 自动播放音乐效果，解决微信自动播放问题
    function musicInWeixinHandler() {
        musicPlay(true);
        document.addEventListener("WeixinJSBridgeReady", function () {
            musicPlay(true);
        }, false);
        document.removeEventListener('DOMContentLoaded', musicInWeixinHandler);
    }

    document.addEventListener('DOMContentLoaded', musicInWeixinHandler);
}

function musicPlay(isPlay) {
    var media = document.querySelector('#bg-music');
    if (isPlay && media.paused) {
        media.play();
    }
    if (!isPlay && !media.paused) {
        media.pause();
    }
}

$(function () {
    $("#sj").swipe({
        swipeLeft: function (event, direction, distance, duration, fingerCount) {
            $(".question").animate({width: '0'}, 350);
        },

        swipeRight: function (event, direction, distance, duration, fingerCount) {
            $(".question").animate({width: '100%'}, 350);
        }
    });

});

$(".btn_start_test").on("click", function () {
    $.ajax({
        url: "get.php",
        type: "get",
        data: '',
        async: false,
        success: function (data) {
            $(".cz_start").addClass("hidden");
            $(".cz_index").removeClass("hidden");
            $(".cz_title").text("..:: 操 作 题 ::..");
            ques = JSON.parse(data);
            $(".btn_pre").attr({"disabled":true});
            $(".btn_next").attr({"disabled":true});
            showQuestion(man,ques,counter);
        }
    });
});

$(".btn_next").on("click", function () {
    if(tim){
        clearInterval(tim);
    }
    if(counter<ques.length-1){
        counter+=1;
        showQuestion(man,ques,counter);
    }else{
        alert("已经到最后一题！");
    }
});

$(".btn_pre").on("click", function () {
    if(tim){
        clearInterval(tim);
    }
    if(counter>0){
        showQuestion(man,ques,counter);
        counter-=1;
    }else{
        alert("已经到最前面！");
    }
});


Date.prototype.Format = function (fmt) { //author: meizz
    var o = {
        "M+": this.getMonth()+1, //月份
        "d+": this.getDate(), //日
        "h+": this.getHours(), //小时
        "m+": this.getMinutes(), //分
        "s+": this.getSeconds(), //秒
        "q+": Math.floor((this.getMonth() + 3) / 3), //季度
        "S": this.getMilliseconds() //毫秒
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
        if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length === 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
}