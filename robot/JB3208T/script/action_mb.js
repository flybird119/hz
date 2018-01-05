
$(document).ready(function () {
    init();
    counter=0;
    $(".bg_btn").on("touchstart ", function () {
        $(this).removeClass("bg_btn_0");
        $(this).addClass("bg_btn_1");
    });
    $(".bg_btn").on("touchend ", function () {
        $(this).removeClass("bg_btn_1");
        $(this).addClass("bg_btn_0");
    });

    $(".mul_start").on("touchend ", function () {
        var id = get_num(this.id);
        var cur = "mul_" + id;
        var nxt = "mul_" + (id + 1);
        man.mul[cur] = 1;
        turnLamp(man,cur, 1);
        man.mul[nxt] = 1;
        if(id===11){
            turnLamp(man,"lamp_13",1);
        }
        setTimeout(turnLamp, 500,man, nxt, 1);
    });

    $(".mul_stop").on("touchend ", function () {
        var id = get_num(this.id);
        var cur = "mul_" + id;
        var pre = "mul_" + (id - 1);
        man.mul[cur] = 0;
        turnLamp(man,cur, 0);
        man.mul[pre] = 0;
        if(id===12){
            turnLamp(man,"lamp_13",0);
        }
        setTimeout(turnLamp, 500,man, pre, 0);
    });

    $("#manual_auto").on("touchend ", function () {
        if (man.stat.manual === 0) {
            man.stat.manual = 1;
            turnLamp(man,"lamp_35", 1);
            turnLamp(man,"lamp_24", 0);
        } else {
            man.stat.manual = 0;
            turnLamp(man,"lamp_35", 0);
            turnLamp(man,"lamp_24", 1);
        }
    });

    $("#reset").on("touchend ", function () {
        man.stat.reset =1;
        if (t) {
            clearInterval(t);
        }
        if(typeof(ot)!=="undefined" && ot.length>0){
            for(var i=0;i<ot.length;i++){
                clearTimeout(ot[i]);
            }
        }
        turnAllLamps(man,0);
        init();
        setTimeout(turnAllLamps, 500, man,1);
        setTimeout(turnAllLamps, 1000, man,0);
        setTimeout(turnAllLamps, 1500, man,1);
        setTimeout(turnAllLamps, 2000, man,0);
        setTimeout(init, 2000);

    });

    $("#muted").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1) {
            return;
        }
        man.stat.muted=1;
        playMusic("");
    });
    $(".btn_ter_test").on("click", function () {
        window.location.href ="../../test_index.php";
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


    $("#down").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1) {
            return;
        }
        if(man.stat.menu_show===1 && man.stat.menu_z!==1 ){
            man.stat.menu_y += 1;
        }
        if(man.stat.broadcast_show ===1){
            if(man.stat.broadcast_index>=(man.inf.broadcast.length-1)){
                man.stat.broadcast_index=(man.inf.broadcast.length-1);
            }else{
                man.stat.broadcast_index+=1;
            }
            drawBlankScrn(man);
            drawBroadcast(man,man.inf,0);
        }
        if(man.stat.shield_show ===1){
            if(man.stat.shield_index>=(man.inf.shield_list.length-1)){
                man.stat.shield_index=(man.inf.shield_list.length-1);
            }else{
                man.stat.shield_index+=1;
            }
            drawBlankScrn(man);
            drawShieldList(man,man.inf,0);
        }


    });

    $("#up").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1) {
            return;
        }
        if(man.stat.menu_show===1 && man.stat.menu_z!==1){
            if (man.stat.menu_y <= -1) {
                man.stat.menu_y = -1;
            } else {
                man.stat.menu_y -= 1;
            }
        }
        if(man.stat.broadcast_show ===1){
            if(man.stat.broadcast_index<=0){
                man.stat.broadcast_index = 0;
            }else{
                man.stat.broadcast_index-=1;
            }
            drawBlankScrn(man);
            drawBroadcast(man,man.inf,0);
        }
        if(man.stat.shield_show ===1){
            if (t) {
                clearInterval(t);
            }
            if(man.stat.shield_index<=0){
                man.stat.shield_index = 0;
            }else{
                man.stat.shield_index-=1;
            }
            drawBlankScrn(man);
            drawShieldList(man,man.inf,0);
        }

    });

    $("#left").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1) {
            return;
        }
        if(man.stat.menu_show===1 && man.stat.menu_z!==1){
            if (man.stat.menu_x <= 0) {
                man.stat.menu_x = 0;
            } else {
                man.stat.menu_x -= 1;
            }
        }
        if(man.stat.shield_show===1 && man.stat.shield_saved_show===1){
            drawSave(man,0);
            man.stat.shield_saved =0;
        }
    });

    $("#right").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1) {
            return;
        }
        if(man.stat.menu_show===1 && man.stat.menu_z!==1){
            man.stat.menu_x += 1;
        }
        if(man.stat.shield_show===1 && man.stat.shield_saved_show===1){
            drawSave(man,1);
            man.stat.shield_saved =1;
        }


    });

    $(".inp").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1 || man.stat.menu_show===1){
            return;
        }
        var x = this.id.substr(2, 1);
        if (man.stat.prog === 1 && man.res.password.length < 4) {
            man.res.password += x;
            if ("4321" === man.res.password) {
                t = setInterval(drawMenuScrn, 500,man);
                man.res.password = "";
                return;
            }
            drawInputBox(man,man.res.password);
        }

    });

    $("#program").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1) {
            return;
        }
        if (t) {
            clearInterval(t);
        }
        man.res.password = "";
        man.stat.prog = 1;
        drawInputBox(man,man.res.password);
    });

    $("#quit").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1) {
            return;
        }
        if(man.stat.shield_show===1){
            drawSave(man,0);
            man.stat.shield_saved_show =1;
            return;
        }
        quit(man);
    });

    $("#btn_start").on("touchend ", function () {
        if(man.stat.broadcast_show ===1){
            var index= man.stat.broadcast_index;
            man.inf.broadcast[index]["状态"]="启动";
            man.stat.broadcast_start=1;
            drawBlankScrn(man);
            drawBroadcast(man,man.inf,0);
        }

    });
    $("#btn_stop").on("touchend ", function () {
        if(man.stat.broadcast_show ===1){
            var index= man.stat.broadcast_index;
            man.stat.broadcast_start=0;
            man.inf.broadcast[index]["状态"]="";
            drawBlankScrn(man);
            drawBroadcast(man,man.inf,0);
        }

    });

    $("#broadcast").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1) {
            return;
        }
        if(man.stat.broadcast%2===0){
            man.stat.broadcast+=1;
            man.stat.broadcast_show=0;
        } else{
            if(t){
                clearInterval(t);
            }
            drawBlankScrn(man);
            drawBroadcast(man,man.inf,0,1);
            man.stat.broadcast+=1;
            man.stat.broadcast_show=1;
        }
    });

    $("#shield").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1) {
            return;
        }
        if(t){
            clearInterval(t);
        }
        var index = man.stat.shield_index;
        if(man.stat.shield_show===1){
            if(man.stat.shield%3===0) {
                man.stat.shield = 0;
                man.inf.shield_list[index]["状态"] = "";
                drawBlankScrn(man);
                drawShieldList(man, man.inf, 0);
                man.stat.shield +=1;
            }else if(man.stat.shield%3===1){
                man.stat.shield = 1;
                man.inf.shield_list[index]["状态"] = "屏蔽";
                drawBlankScrn(man);
                drawShieldList(man, man.inf, 0);
                man.stat.shield += 1;
            } else{
                man.stat.shield = 2;
                man.inf.shield_list[index]["状态"] = "预留";
                drawBlankScrn(man);
                drawShieldList(man, man.inf, 0);
                man.stat.shield += 1;
            }
        }


    });


    $("#confirm").on("touchend ", function () {
        if (man.stat.self_check === 1 || man.stat.reset===1) {
            return;
        }
        if(man.stat.menu_show===0){
            return;
        }
        if(man.stat.shield_saved_show ===1){
            man.stat.shield_saved_show =0;
            quit(man);
            return;

        }
        if (t) {
            clearInterval(t);
        }
        man.stat.menu_z=1;
        drawBlankScrn(man);
        if (man.stat.menu_x === 4 && man.stat.menu_y === 1) { //火警记录
            drawFireRec(man,man.inf, 0);
        } else if (man.stat.menu_x === 4 && man.stat.menu_y === 4) { //故障记录
            drawErrRec(man,man.inf, 0);
        } else if (man.stat.menu_x === 4 && man.stat.menu_y === 2) { //联动记录
            drawLinkageRec(man,man.inf, 0);
        } else if (man.stat.menu_x === 4 && man.stat.menu_y === 3) { //监管记录
            drawSuperviseRec(man,man.inf, 0);
        } else if (man.stat.menu_x === 2 && man.stat.menu_y === 0) { //故障信息
            drawErrRec(man,man.inf, 0);
        } else if (man.stat.menu_x === 2 && man.stat.menu_y === 2) { //监管信息
            drawSuperviseRec(man,man.inf, 0);
        } else if (man.stat.menu_x === 2 && man.stat.menu_y === 1) { //火警信息
            drawFireRec(man,man.inf, 0);
        } else if (man.stat.menu_x === 2 && man.stat.menu_y === 3) { //联动信息
            drawLinkageRec(man,man.inf, 0);
        } else if (man.stat.menu_x === 0 && man.stat.menu_y === 1) { //联动信息
            drawShieldList(man,man.inf, 0);
        } else if (man.stat.menu_x === 1 && man.stat.menu_y === 1) { //声光测试
            man.stat.self_check = 1;
            turnLamp(man,"lamp_25", 1);
            ot=[];
            colorSoundAllLights(man,"#ccc", "#000", "指示灯全亮", "", 1);
            ot[0]=setTimeout(colorSoundAllLights, 3000,man, "#000", "#fff", "指示灯全灭", "", 0);
            ot[1]=setTimeout(colorSoundLights, 6000, man,"#ff0000", "#fff", "火警声", "./media/alarm.mp3", ["lamp_21", "lamp_25"], 1);
            ot[2]=setTimeout(colorSoundLights, 9000, man,"#7a6bef", "#fff", "监管声", "./media/short.mp3", ["lamp_21"], 0);
            ot[3]=setTimeout(colorSoundLights, 9000,man, "#7a6bef", "#fff", "监管声", "./media/short.mp3", ["lamp_11","lamp_25"], 1);
            ot[4]=setTimeout(colorSoundLights, 12000, man,"#b8a5ff", "#fff", "联动声", "", ["lamp_11"], 0);
            ot[4]=setTimeout(colorSoundLights, 12000, man,"#b8a5ff", "#fff", "联动声", "", ["lamp_22", "lamp_25"], 1);
            ot[5]=setTimeout(colorSoundLights, 15000,man, "#4bee5e", "#000", "提示声", "./media/short.mp3", ["lamp_22"], 0);
            ot[6]=setTimeout(colorSoundLights, 15000,man, "#4bee5e", "#000", "提示声", "./media/short.mp3", ["lamp_33", "lamp_25"], 1);
            ot[7]=setTimeout(colorSoundLights, 17000, man,"#f6ff00", "#000", "故障声", "./media/buzzing.mp3", ["lamp_33"], 0);
            ot[8]=setTimeout(colorSoundLights, 17000,man, "#f6ff00", "#000", "故障声", "./media/buzzing.mp3", ["lamp_12", "lamp_25"], 1);
            ot[9]=setTimeout(colorSoundLights, 18000, man,"#f6ff00", "#000", "故障声", "", ["lamp_12", "lamp_25"], 0);
            ot[10]=setTimeout(colorSoundLights, 18000,man, "#f6ff00", "#000", "故障声", "", ["lamp_24", "lamp_31", "lamp_37"], 1);
            ot[11]=setTimeout(changeSelfCheck, 18000,man);
            ot[11]=setTimeout(quit, 18500,man);
        } else {
            drawOther(man);
        }
    });
});

function changeSelfCheck(r){
    r.stat.self_check=0;
}


function updateStat(r,str) {
    if(str!==""){
        var tmp = JSON.parse(str);
        for(var i in tmp){
            r.stat[i]=tmp[i];
        }
    }
}

function updateLamps(r,str) {
    if(str!==""){
        var tmp = JSON.parse(str);
        for(var i in tmp){
            r.lamp[i]=tmp[i];
        }
        setLamps(r);
    }
}

function updateMuls(r,str) {
    if(str!==""){
        var tmp = JSON.parse(str);
        for(var i in tmp){
            r.mul[i]=tmp[i];
        }
        setMuls(r);
    }

}

function updateScrn(str) {
    if(str!==""){
        eval(str);
    }

}


function checkAnswer(r,str){
    var tmp = JSON.parse(str);
    for(var i in tmp["stat"]){
        if(r.stat[i]!== tmp["stat"][i]){
            return;
        }
    }
    for(var i in tmp["lamp"]){
        if(r.lamp[i]!== tmp["lamp"][i]){
            return;
        }
    }
    for(var i in tmp["mul"]){
        if(r.mul[i]!== tmp["mul"][i]){
            return;
        }
    }
    if(tim){
        clearInterval(tim);
    }
    alert("恭喜过关，请点击下一题");
    init();
    $(".btn_pre").removeAttr("disabled");
    $(".btn_next").removeAttr("disabled");

}

function showQuestion(r,qs,c) {
    $(".cz_des").text(qs[c]["ques"]);
    playMusic(qs[c]["sound"]);
    updateLamps(r,qs[c]["lamps"]);
    updateStat(r,qs[c]["stat"]);
    updateMuls(r,qs[c]["mul"]);
    updateScrn(qs[c]["scrn"]);
    $(".btn_pre").attr({"disabled":true});
    $(".btn_next").attr({"disabled":true});
    tim = setInterval(checkAnswer,1000,r,qs[c]["answer"]);

}




function get_num(str) {
    return parseInt(str.split("_")[1]);
}

function Robot() {
    this.res = {ctx: null, password: ""};
    this.stat = {reset: 0, prog: 0, manual: 0, w: 0, h: 0, menu_show:0,menu_x: -1, menu_y: -1,menu_z:0, self_check: 0,broadcast:0,broadcast_index:0,broadcast_show:0,broadcast_start:0,muted:1,shield:0,shield_index:0,shield_show:0,shield_saved:1,shield_saved_show:0};
    this.lamp = {
        lamp_11: 0, lamp_12: 0, lamp_13: 0, lamp_14: 0, lamp_15: 0, lamp_16: 0, lamp_17: 0,
        lamp_21: 0, lamp_22: 0, lamp_23: 0, lamp_24: 1, lamp_25: 0, lamp_26: 0,
        lamp_31: 1, lamp_32: 0, lamp_33: 0, lamp_34: 0, lamp_35: 0, lamp_36: 0, lamp_37: 1
    };
    this.mul = {
        mul_11: 0, mul_12: 0, mul_13: 0,
        mul_21: 0, mul_22: 0, mul_23: 0,
        mul_31: 0, mul_32: 0, mul_33: 0,
        mul_41: 0, mul_42: 0, mul_43: 0
    };
    this.inf = {
        err: [
            err1 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "故障"},
            err2 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "故障"}
        ],
        supervise: [
            err1 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "排烟风机", "type": "反馈", "msg": "排烟风机故障"},
            err2 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "排烟风机", "type": "反馈", "msg": "排烟风机故障"},
            err3 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "排烟风机", "type": "反馈", "msg": "排烟风机故障"},
        ],
        linkage: [
            err1 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "故障"},
            err2 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "故障"},
            err3 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "故障"},
        ],
        fire: [
            err1 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "火警", "addr": "住宿13楼1308"},
            err1 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "火警", "addr": "住宿13楼1308"},
            err1 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "火警", "addr": "住宿13楼1308"}
        ],
        shield: [
            err1 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "故障"},
            err2 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "故障"},
            err3 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "感烟探头", "type": "故障"},
        ],
        fire_rec: [
            err1 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "手动按钮", "type": "火警", "msg": "排烟风机故障"},
            err2 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "手动按钮", "type": "火警", "msg": "排烟风机故障"},
            err3 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "手动按钮", "type": "火警", "msg": "排烟风机故障"}
        ],
        err_rec: [
            err1 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "手动按钮", "type": "火警", "msg": "排烟风机故障"},
            err2 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "手动按钮", "type": "火警", "msg": "排烟风机故障"},
            err3 = {"机号": 1, "回路": 1, "点号": 1, "分区": 1, "name": "手动按钮", "type": "火警", "msg": "排烟风机故障"}
        ],
        linkage_rec: [
            err1 = {"机号": 1, "回路": 1, "点号": 100, "分区": 0, "name": "消防广播", "type": "手动", "msg": "1 回路 100 号"},
            err2 = {"机号": 1, "回路": 1, "点号": 49, "分区": 0, "name": "消防广播", "type": "手动", "msg": "1 回路 49 号"},
            err3 = {"机号": 1, "回路": 1, "点号": 108, "分区": 0, "name": "声光警报", "type": "手动", "msg": "声光警报器 "},
            err4 = {"机号": 1, "回路": 1, "点号": 45, "分区": 1, "name": "防火门", "type": "反馈", "msg": "常开式防火门模块"},
            err5 = {"机号": 1, "回路": 1, "点号": 52, "分区": 1, "name": "正压风阀", "type": "反馈", "msg": "送风阀控制模块"}
        ],
        sup_rec: [
            err1 = {"机号": 1, "回路": 1, "点号": 18, "分区": 0, "name": "信号蝶阀", "type": "监管", "msg": "雨林系统信号蝶阀"},
            err2 = {"机号": 1, "回路": 1, "点号": 22, "分区": 0, "name": "信号蝶阀", "type": "监管", "msg": "预作用系统信号蝶阀"},
            err3 = {"机号": 1, "回路": 1, "点号": 25, "分区": 0, "name": "信号蝶阀", "type": "监管", "msg": "预作用系统信号蝶阀"},
            err4 = {"机号": 1, "回路": 1, "点号": 16, "分区": 0, "name": "信号蝶阀", "type": "监管", "msg": "预作用系统信号蝶阀"},
            err5 = {"机号": 1, "回路": 1, "点号": 19, "分区": 0, "name": "信号蝶阀", "type": "监管", "msg": "预作用系统信号蝶阀"},

        ],
        broadcast: [
            err1 = {"机号": 1, "回路": 1, "点号": 100, "分区": 0, "name": "消防广播","状态":""},
            err2 = {"机号": 1, "回路": 1, "点号": 100, "分区": 0, "name": "消防广播","状态":""},
            err3 = {"机号": 1, "回路": 1, "点号": 100, "分区": 0, "name": "消防广播","状态":"启动"},


        ],
        shield_list: [
            err1 = {"分区": 0, "层显": 0, "点号": 58, "灵敏度": 60, "unit": "℃","msg":"感温探头  地点  雨林系统烟感","状态":""},
            err2 = {"分区": 0, "层显": 0, "点号": 62, "灵敏度": 60, "unit": "℃","msg":"感温探头  地点  雨林系统烟感","状态":""},
            err3 = {"分区": 0, "层显": 0, "点号": 73, "灵敏度": 60, "unit": "℃","msg":"感温探头  地点  雨林系统烟感","状态":""}


        ]
    };
    this.stat.w = getWidth();
    this.stat.h = getHeight();
    this.res.ctx = getCtx();
}

var init=function(){
    man=new Robot();
    setLamps(man);
    setMuls(man);
    musicPlay();
    t = setInterval(drawNormal, 500,man);
};

var setLamps = function (r) {
    for (var i in r.lamp) {
        turnLamp(r,i, r.lamp[i]);
    }
};
var setMuls = function (r) {
    for (var i in r.mul) {
        turnMul(r,i, r.mul[i]);
    }
};
var turnLamp = function (r,id, stat) {
    var ele = $("#" + id);
    if (stat === 1) {
        r.lamp[id] = 1;
        var color = ele.attr("alt");
        ele.attr("src", "img/" + color + "_lamp.png");
    } else {
        r.lamp[id] = 0;
        ele.attr("src", "img/gray_lamp.png");
    }
};
var turnMul = function (r,id, stat) {
    var ele = $("#" + id);
    if (stat === 1) {
        r.mul[id] = 1;
        var color = ele.attr("alt");
        ele.attr("src", "img/" + color + "_lamp.png");
    } else {
        r.mul[id] = 0;
        ele.attr("src", "img/gray_lamp.png");
    }
};
var turnAllLamps = function (r,stat) {
    for (var i in r.lamp) {
        turnLamp(r,i, stat);
    }
};
var getWidth = function () {
    return $(".screen").width();
};
var getHeight = function () {
    return $(".screen").height();
};
var getCtx = function () {
    var w=getWidth();
    var h=getHeight();
    $(".screen").html("<canvas id='can_top' width='" + w + "' height='" + h + "'/>");
    var c = document.getElementById("can_top");
    var ctx = c.getContext("2d");
    ctx.fillStyle = "#fff";
    ctx.font = "12px 微软雅黑";
    ctx.strokeStyle = "#666";
    return ctx;
};
var getNow = function () {
    var d = new Date();
    var d1 = d.getFullYear() + "年" + (d.getMonth() + 1) + "月" + d.getDate() + "日";
    var d_map = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];
    var d2 = d_map[d.getDay()];
    var d3 = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    return d1 + " " + d2 + " " + d3;
};
var drawBlankScrn = function (r) {
    var c = r.res.ctx;
    var old = c.fillStyle;
    c.fillStyle = "#02dde3";
    c.fillRect(0, 0, r.stat.w, r.stat.h);
    c.fillStyle = old;
};
var drawBottom = function (r) {
    var str;
    if (r.stat.manual === 0) {
        str = "单机    " + "自动状态    " + getNow();
    } else {
        str = "单机    " + "手动状态    " + getNow();
    }
    r.res.ctx.fillText(str, r.stat.w / 2 - 135, r.stat.h - 8);
};
var drawMenu = function (r) {
    var w = r.stat.w;
    var h = r.stat.h;
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var m = [
        [0, 14, "系统设置"],
        [w * 0.21, 14, "系统调试"],
        [w * 0.42, 14, "系统信息"],
        [w * 0.63, 14, "联动编程"],
        [w * 0.84, 14, "记录信息"]
    ];
    if (r.stat.menu_x <= 0) {
        r.stat.menu_x = 0;
    }
    var n = r.stat.menu_x % 5;
    for (var i = 0; i < m.length; i++) {  //选中某个菜单，该菜单用绿色绘出
        if (i === n) {
            ctx.fillStyle = "#00ff00";
            ctx.fillText(m[i][2], m[i][0], m[i][1]);
            ctx.fillStyle = old;
        } else {
            ctx.fillText(m[i][2], m[i][0], m[i][1]);
        }
    }
    ctx.fillStyle = old;
};
var drawSubMenu = function (r) {
    var m;
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    if (r.stat.menu_x % 5 === 0) {
        r.stat.menu_x = 0;
        m = [
            [0, 14 * 2, "1 回路配置"],
            [0, 14 * 3, "2 属性配置"],
            [0, 14 * 4, "3 通讯能力"],
            [0, 14 * 5, "4 时间设置"],
            [0, 14 * 6, "5 气体灭火"],
            [0, 14 * 7, "6 系统声光"],
            [0, 14 * 8, "7 火警确认"],
            [0, 14 * 9, "8 打印设置"],
            [0, 14 * 10, "9 密码修改"]
        ];
        r.stat.menu_y = r.stat.menu_y % 9;
    } else if (r.stat.menu_x % 5 === 1) {
        r.stat.menu_x = 1;
        m = [
            [w * 0.21, 14 * 2, "1 单步测试"],
            [w * 0.21, 14 * 3, "2 声光测试"],
            [w * 0.21, 14 * 4, "3 串口测试"],
            [w * 0.21, 14 * 5, "4 层显数据"],
            [w * 0.21, 14 * 6, "5 联网测试"],
            [w * 0.21, 14 * 7, "6 逻辑测试"],
            [w * 0.21, 14 * 8, "7 属性传送"],
            [w * 0.21, 14 * 9, "8 通讯状况"],
            [w * 0.21, 14 * 10, "9 调试指南"]

        ];
        r.stat.menu_y = r.stat.menu_y % 9;
    } else if (r.stat.menu_x % 5 === 2) {
        r.stat.menu_x = 2;
        m = [
            [w * 0.21 * 2, 14 * 2, "1 故障信息"],
            [w * 0.21 * 2, 14 * 3, "2 火警信息"],
            [w * 0.21 * 2, 14 * 4, "3 监管信息"],
            [w * 0.21 * 2, 14 * 5, "4 联动信息"],
            [w * 0.21 * 2, 14 * 6, "5 气体灭火"],
            [w * 0.21 * 2, 14 * 7, "6 屏蔽信息"],
            [w * 0.21 * 2, 14 * 8, "7 声光信息"]
        ];
        r.stat.menu_y = r.stat.menu_y % 7;
    } else if (r.stat.menu_x % 5 === 3) {
        r.stat.menu_x = 3;
        m = [
            [w * 0.21 * 3, 14 * 2, "1 与或逻辑"],
            [w * 0.21 * 3, 14 * 3, "2 分区逻辑"],
            [w * 0.21 * 3, 14 * 4, "3 火警总报"],
            [w * 0.21 * 3, 14 * 5, "4 故障总报"],
            [w * 0.21 * 3, 14 * 6, "5 广播模块"],
            [w * 0.21 * 3, 14 * 7, "6 多线复位"],
            [w * 0.21 * 3, 14 * 8, "7 外控电源"],
            [w * 0.21 * 3, 14 * 9, "8 讯响交替"]
        ];
        r.stat.menu_y = r.stat.menu_y % 8;
    } else {
        r.stat.menu_x = 4;
        m = [
            [w * 0.21 * 4, 14 * 2, "1 运行记录"],
            [w * 0.21 * 4, 14 * 3, "2 火警记录"],
            [w * 0.21 * 4, 14 * 4, "3 联动记录"],
            [w * 0.21 * 4, 14 * 5, "4 监管记录"],
            [w * 0.21 * 4, 14 * 6, "5 故障记录"],
            [w * 0.21 * 4, 14 * 7, "6 系统变更"],
            [w * 0.21 * 4, 14 * 8, "7 关于系统"]
        ];
        r.stat.menu_y = r.stat.menu_y % 7;
    }
    for (var i = 0; i < m.length; i++) {
        if (r.stat.menu_y === i) { //如果被选中，则用红色显示
            ctx.fillStyle = "#ff0000";
            ctx.fillText(m[i][2], m[i][0], m[i][1]);
            ctx.fillStyle = old;
        } else {
            ctx.fillText(m[i][2], m[i][0], m[i][1]);
        }
    }
    ctx.fillStyle = old;
};
var drawMenuScrn = function (r) {
    r.stat.menu_show=1;
    drawBlankScrn(r);
    drawMenu(r);
    drawSubMenu(r);
    drawBottom(r);
};
var drawErr = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var err = inf["err"];
    ctx.fillStyle = "#ffff00";
    ctx.fillText("故障信息", w * 0.02, 14 + h_offset);
    ctx.fillStyle = "#000";
    ctx.fillText(" 总数 " + err.length, w * 0.21, 14 + h_offset);
    for (var i = 0; i < err.length; i++) {
        ctx.fillText(i + 1, 0, 42 + 28 * i + h_offset);
        ctx.fillText("机号 " + err[i]["机号"], w * 0.11, 42 + 28 * i + h_offset);
        ctx.fillText("回路 " + err[i]["回路"], w * 0.22, 42 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.33, 42 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.44, 42 + 28 * i + h_offset);
        ctx.fillText(err[i]["name"], w * 0.66, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#ffff00";
        ctx.fillText(err[i]["type"], w * 0.88, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(getNow(), w * 0.11, 42 + 28 * i + 14 + h_offset);
        ctx.fillText(err[i]["回路"] + " 回路" + err[i]["机号"] + " 号", w * 0.66, 42 + 28 * i + 14 + h_offset);
        ctx.fillStyle = "#000";

    }
    ctx.fillStyle = "#666666";
    ctx.strokeRect(w * 0.1, 28 + h_offset, w * 0.85, 28 * err.length + 7);
    ctx.fillStyle = old;
    return 28 * err.length + 42 + h_offset;
};
var drawLinkage = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var err = inf["linkage"];
    ctx.fillStyle = "#ff0000";
    ctx.fillText("联动信息", w * 0.02, 14 + h_offset);
    ctx.fillStyle = "#0000ff";
    ctx.fillText(" 启动总数  0 反馈总数 " + err.length, w * 0.21, 14 + h_offset);
    for (var i = 0; i < err.length; i++) {
        ctx.fillText(i + 1, 0, 42 + 28 * i + h_offset);
        ctx.fillText("机号 " + err[i]["机号"], w * 0.11, 42 + 28 * i + h_offset);
        ctx.fillText("回路 " + err[i]["回路"], w * 0.22, 42 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.33, 42 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.44, 42 + 28 * i + h_offset);
        ctx.fillText(err[i]["name"], w * 0.66, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#ff0000";
        ctx.fillText(err[i]["type"], w * 0.88, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(getNow(), w * 0.11, 42 + 28 * i + 14 + h_offset);
        ctx.fillText(err[i]["msg"], w * 0.66, 42 + 28 * i + 14 + h_offset);
        ctx.fillStyle = "#000";

    }
    ctx.fillStyle = "#666666";
    ctx.strokeRect(w * 0.1, 28 + h_offset, w * 0.85, 28 * err.length + 7);
    ctx.fillStyle = old;
    return 28 * err.length + 42 + h_offset;
};
var drawShield = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var err = inf["shield"];
    ctx.fillStyle = "#ffff00";
    ctx.fillText("屏蔽信息", w * 0.02, 14 + h_offset);
    ctx.fillStyle = "#000";
    ctx.fillText(" 屏蔽总数 " + err.length, w * 0.21, 14 + h_offset);
    for (var i = 0; i < err.length; i++) {
        ctx.fillText(i + 1, 0, 42 + 28 * i + h_offset);
        ctx.fillText("机号 " + err[i]["机号"], w * 0.11, 42 + 28 * i + h_offset);
        ctx.fillText("回路 " + err[i]["回路"], w * 0.22, 42 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.33, 42 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.44, 42 + 28 * i + h_offset);
        ctx.fillText(err[i]["name"], w * 0.66, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#ff0000";
        ctx.fillText(err[i]["type"], w * 0.88, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(getNow(), w * 0.11, 42 + 28 * i + 14 + h_offset);
        ctx.fillText(err[i]["msg"], w * 0.66, 42 + 28 * i + 14 + h_offset);
        ctx.fillStyle = "#000";
    }
    ctx.fillStyle = "#666666";
    ctx.strokeRect(w * 0.1, 28 + h_offset, w * 0.85, 28 * err.length + 7);
    ctx.fillStyle = old;
    return 28 * err.length + 42 + h_offset;
};
var drawSupervise = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var err = inf["supervise"];
    ctx.fillStyle = "#ff0000";
    ctx.fillText("监管信息", w * 0.02, 14 + h_offset);
    ctx.fillStyle = "#000";
    ctx.fillText(" 启动总数 " + err.length, w * 0.21, 14 + h_offset);
    for (var i = 0; i < err.length; i++) {
        ctx.fillText(i + 1, 0, 42 + 28 * i + h_offset);
        ctx.fillText("机号 " + err[i]["机号"], w * 0.11, 42 + 28 * i + h_offset);
        ctx.fillText("回路 " + err[i]["回路"], w * 0.22, 42 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.33, 42 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.44, 42 + 28 * i + h_offset);
        ctx.fillText(err[i]["name"], w * 0.66, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#ff0000";
        ctx.fillText(err[i]["type"], w * 0.88, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(getNow(), w * 0.11, 42 + 28 * i + 14 + h_offset);
        ctx.fillText(err[i]["msg"], w * 0.66, 42 + 28 * i + 14 + h_offset);
        ctx.fillStyle = "#000";
    }
    ctx.fillStyle = "#666666";
    ctx.strokeRect(w * 0.1, 28 + h_offset, w * 0.85, 28 * err.length + 7);
    ctx.fillStyle = old;
    return 28 * err.length + 42 + h_offset;
};
var drawFire = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var err = inf["fire"];
    ctx.fillStyle = "rgba(255,0,0,1)";
    ctx.fillRect(w * 0.1, h_offset, w * 0.85, 28 * err.length + 7);
    for (var i = 0; i < err.length; i++) {
        ctx.fillStyle = "#ff0000";
        ctx.fillText("首报", 0, 14 + 28 * i + h_offset);
        ctx.fillStyle = "#fff";
        ctx.fillText("机号 " + err[i]["机号"], w * 0.11, 14 + 28 * i + h_offset);
        ctx.fillText("回路 " + err[i]["回路"], w * 0.22, 14 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.33, 14 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.44, 14 + 28 * i + h_offset);
        ctx.fillText(err[i]["name"], w * 0.66, 14 + 28 * i + h_offset);
        ctx.fillText(err[i]["type"], w * 0.88, 14 + 28 * i + h_offset);
        ctx.fillText(getNow(), w * 0.11, 14 + 28 * i + 14 + h_offset);
        ctx.fillText(err[i]["addr"], w * 0.66, 14 + 28 * i + 14 + h_offset);
    }
    ctx.fillStyle = old;
    return 28 * err.length + 14 + h_offset;
};
var drawFireRec = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var err = inf["fire_rec"];
    ctx.fillStyle = "#0000ff";
    ctx.fillText("火警记录", w * 0.02, 14 + h_offset);
    for (var i = 0; i < err.length; i++) {
        ctx.fillStyle = "#000";
        ctx.fillText(i + 1, 0, 42 + 28 * i + h_offset);
        ctx.fillText("机号 " + err[i]["机号"], w * 0.11, 42 + 28 * i + h_offset);
        ctx.fillText("回路 " + err[i]["回路"], w * 0.22, 42 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.33, 42 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.44, 42 + 28 * i + h_offset);
        ctx.fillText(err[i]["name"], w * 0.66, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#ff0000";
        ctx.fillText(err[i]["type"], w * 0.88, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(getNow(), w * 0.11, 42 + 28 * i + 14 + h_offset);
        ctx.fillText(err[i]["msg"], w * 0.66, 42 + 28 * i + 14 + h_offset);
        ctx.fillStyle = "#000";
    }
    ctx.fillStyle = "#666666";
    ctx.strokeRect(w * 0.1, 28 + h_offset, w * 0.85, 28 * err.length + 7);
    ctx.fillStyle = old;
    return 28 * err.length + 42 + h_offset;
};
var drawLinkageRec = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var err = inf["linkage_rec"];
    ctx.fillStyle = "#0000ff";
    ctx.fillText("联动记录", w * 0.02, 14 + h_offset);
    for (var i = 0; i < err.length; i++) {
        ctx.fillStyle = "#000";
        ctx.fillText(i + 1, 0, 42 + 28 * i + h_offset);
        ctx.fillText("机号 " + err[i]["机号"], w * 0.11, 42 + 28 * i + h_offset);
        ctx.fillText("回路 " + err[i]["回路"], w * 0.22, 42 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.33, 42 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.46, 42 + 28 * i + h_offset);
        ctx.fillText(err[i]["name"], w * 0.66, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(err[i]["type"], w * 0.88, 42 + 28 * i + h_offset);
        ctx.fillText(getNow(), w * 0.11, 42 + 28 * i + 14 + h_offset);
        ctx.fillText(err[i]["msg"], w * 0.66, 42 + 28 * i + 14 + h_offset);
        ctx.fillStyle = "#000";
    }
    ctx.fillStyle = "#666666";
    ctx.strokeRect(w * 0.1, 28 + h_offset, w * 0.85, 28 * err.length + 7);
    ctx.fillStyle = old;
    return 28 * err.length + 42 + h_offset;
};

var drawOther = function (r) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var h = r.stat.h;
    var des = ["该版本为试用版，如需完整功能请联系", "华筑教育科技有限公司", "联系电话：15395833601", "葛小姐"];
    var mw=ctx.measureText(des[0]).width;
    ctx.fillStyle = "#ff0000";
    for(var i=0;i<des.length;i++){
        ctx.fillText(des[i],(w-mw)/2,(h/2-20)+i*14);
    }
    ctx.strokeRect((w-mw)/2-5, h/2-35, w-mw+70, h/2-50);
    ctx.fillStyle = old;
};




var drawErrRec = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var err = inf["err_rec"];
    ctx.fillStyle = "#0000ff";
    ctx.fillText("故障记录", w * 0.02, 14 + h_offset);
    for (var i = 0; i < err.length; i++) {
        ctx.fillText("机号 " + err[i]["机号"], w * 0.05, 42 + 28 * i + h_offset);
        ctx.fillText("回路 " + err[i]["回路"], w * 0.24, 42 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.40, 42 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.52, 42 + 28 * i + h_offset);
        ctx.fillText(err[i]["name"], w * 0.70, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#ffff00";
        ctx.fillText(err[i]["type"], w * 0.86, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(getNow(), w * 0.05, 42 + 28 * i + 14 + h_offset);
        ctx.fillText(err[i]["msg"], w * 0.66, 42 + 28 * i + 14 + h_offset);
        ctx.fillStyle = "#000";
    }
    ctx.fillStyle = "#666666";
    ctx.strokeRect(w * 0.01, 28 + h_offset, w * 0.95, 28 * err.length + 7);
    ctx.fillStyle = old;
    return 28 * err.length + 42 + h_offset;
};




var drawSave = function (r,flag) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var h = r.stat.h;
    var str = "数据已经变更，是否要保存！";
    var x= ctx.measureText(str).width;
    ctx.fillStyle="#02dde3";
    ctx.fillRect((w-x)/2-5,h/2-25,x+10,50);
    ctx.fillStyle="#ff0000";
    ctx.fillText("警告!", (w-x)/2,h/2-10);
    ctx.fillStyle="#fff";
    ctx.fillText(str, (w-x)/2,h/2+5);
    if(flag===0){
        ctx.fillStyle="#ff0000";
        ctx.fillText("放弃", (w-x)/2+20,h/2+20);
        ctx.fillStyle="#0000ff";
        ctx.fillText("保存", (w-x)/2+120,h/2+20);
    }else{
        ctx.fillStyle="#0000ff";
        ctx.fillText("放弃", (w-x)/2+20,h/2+20);
        ctx.fillStyle="#ff0000";
        ctx.fillText("保存", (w-x)/2+120,h/2+20);
    }
    ctx.fillStyle = "#666666";
    ctx.strokeRect((w-x)/2-5,h/2-25,x+10,50);
    ctx.fillStyle = old;
};



var drawBroadcast = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var h = r.stat.h;
    var err = inf["broadcast"];
    ctx.fillStyle = "#0000ff";
    var s="";
    if(r.stat.manual===1){
        s+="手动状态";
    }else{
        s+="自动状态";
    }
    ctx.fillText(s,w * 0.02, 14 + h_offset);
    ctx.fillStyle = "#000";
    ctx.fillText("机号 0", w * 0.20, 14 + h_offset);
    ctx.fillText("回路 1", w * 0.35, 14 + h_offset);
    ctx.fillText("点号 0", w * 0.50, 14 + h_offset);
    ctx.fillText("分区 0", w * 0.65, 14 + h_offset);
    ctx.fillStyle = "#0000ff";
    ctx.fillText("总数 ", w * 0.80, 14 + h_offset);
    ctx.fillStyle = "#0000ff";
    ctx.fillText(err.length, w * 0.90, 14 + h_offset);
    ctx.fillStyle = "#000";
    for (var i = 0; i < err.length; i++) {
        ctx.fillText(i+1, w * 0.02, 42 + 28 * i + h_offset);
        ctx.fillText("机号 " + err[i]["机号"], w * 0.20, 42 + 28 * i + h_offset);
        ctx.fillText("回路 " + err[i]["回路"], w * 0.35, 42 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.50, 42 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.65, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#ff0000";
        ctx.fillText(err[i]["name"], w * 0.80, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(err[i]["回路"]+" 回路 "+ err[i]["点号"]+"号", w * 0.20, 42 + 28 * i + 14 + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(err[i]["状态"], w * 0.80, 42 + 28 * i +14+ h_offset);
        ctx.fillStyle = "#000";
        if(i===r.stat.broadcast_index){
            ctx.strokeRect(w * 0.18, 28 + h_offset+i*28, w * 0.78, 30);
        }
    }
    ctx.strokeRect(w * 0.01, 28 + h_offset, w * 0.95, h);
    ctx.fillStyle = old;
    return 28 * err.length + 42 + h_offset;
};



var drawShieldList = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var h = r.stat.h;
    var err = inf["shield_list"];
    ctx.fillStyle = "#0000ff";
    ctx.fillText("属性配置",w * 0.02, 14 + h_offset);
    ctx.fillStyle = "#000";
    ctx.fillText("回路 1", w * 0.35, 14 + h_offset);
    ctx.fillStyle = "#ff0000";
    ctx.fillText("※", w * 0.58, 14 + h_offset);
    ctx.fillStyle = "#0000ff";
    ctx.fillText("地点栏按编辑键输入汉字", w * 0.62, 14 + h_offset);
    ctx.fillStyle = "#000";
    for (var i = 0; i < err.length; i++) {
        ctx.fillText(i+1, w * 0.02, 42 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.20, 42 + 28 * i + h_offset);
        ctx.fillText("层显 " + err[i]["层显"], w * 0.35, 42 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.50, 42 + 28 * i + h_offset);
        ctx.fillText("灵敏度 " + err[i]["灵敏度"], w * 0.65, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#ffff00";
        ctx.fillText(err[i]["unit"], w * 0.85, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(err[i]["msg"], w * 0.20, 42 + 28 * i + 14 + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(err[i]["状态"], w * 0.80, 42 + 28 * i +14+ h_offset);
        ctx.fillStyle = "#000";
        if(i===r.stat.shield_index){
            ctx.strokeRect(w * 0.18, 28 + h_offset+i*28, w * 0.78, 30);
        }
    }
    ctx.strokeRect(w * 0.01, 28 + h_offset, w * 0.95, h);
    ctx.fillStyle = old;
    r.stat.shield_show=1;
    return 28 * err.length + 42 + h_offset;
};


var drawSuperviseRec = function (r,inf, h_offset) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var err = inf["sup_rec"];
    ctx.fillStyle = "#0000ff";
    ctx.fillText("监管记录", w * 0.02, 14 + h_offset);
    for (var i = 0; i < err.length; i++) {
        ctx.fillText("机号 " + err[i]["机号"], w * 0.05, 42 + 28 * i + h_offset);
        ctx.fillText("回路 " + err[i]["回路"], w * 0.24, 42 + 28 * i + h_offset);
        ctx.fillText("点号 " + err[i]["点号"], w * 0.40, 42 + 28 * i + h_offset);
        ctx.fillText("分区 " + err[i]["分区"], w * 0.52, 42 + 28 * i + h_offset);
        ctx.fillText(err[i]["name"], w * 0.70, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#ffff00";
        ctx.fillText(err[i]["type"], w * 0.86, 42 + 28 * i + h_offset);
        ctx.fillStyle = "#0000ff";
        ctx.fillText(getNow(), w * 0.05, 42 + 28 * i + 14 + h_offset);
        ctx.fillText(err[i]["msg"], w * 0.66, 42 + 28 * i + 14 + h_offset);
        ctx.fillStyle = "#000";
    }
    ctx.fillStyle = "#666666";
    ctx.strokeRect(w * 0.01, 28 + h_offset, w * 0.95, 28 * err.length + 7);
    ctx.fillStyle = old;
    return 28 * err.length + 42 + h_offset;
};
var drawInputBox = function (r,pwd) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var h = r.stat.h;
    drawBlankScrn(r);
    ctx.strokeRect(w / 2 - 75, h / 2 - 30, 150, 60);
    ctx.fillText("请输入密码：", w / 2 - 70, h / 2, 150, 60);
    ctx.strokeRect(w / 2 + 5, h / 2 - 12, 60, 15);
    var str = getPwd(pwd);
    ctx.fillText(str, w / 2 + 10, h / 2+3);
    ctx.fillStyle = old;
};
var getPwd = function (pwd) {
    var str = "";
    for (var i = 0; i < pwd.length; i++) {
        str = str + "*";
    }
    return str;
};
var drawColorScrn = function (r,color_bg, color_font, info) {
    var ctx = r.res.ctx;
    var old = ctx.fillStyle;
    var w = r.stat.w;
    var h = r.stat.h;
    var len = ctx.measureText(info).width;
    ctx.fillStyle = "#0000ff";
    ctx.fillText("声光测试", w * 0.02, 14);
    ctx.fillStyle = color_bg;
    ctx.fillRect(w * 0.01, 24, w * 0.98, h - 20);
    ctx.fillStyle = color_font;
    ctx.fillText(info, (w - len) / 2, h / 2 + 3);
    ctx.fillStyle = old;
};
var drawNormal = function (r) {
    drawBlankScrn(r);
    drawBottom(r);
};
var colorSoundAllLights = function (r,color_bg, color_font, info, sound_parh, lamp_stat) {
    drawBlankScrn(r);
    drawColorScrn(r,color_bg, color_font, info);
    playMusic(sound_parh);
    turnAllLamps(r,lamp_stat);
};
var colorSoundLights = function (r,color_bg, color_font, info, sound_parh, la, stat) {
    drawBlankScrn(r);
    drawColorScrn(r,color_bg, color_font, info)
    playMusic(sound_parh);
    for (var i = 0; i < la.length; i++) {
        if (stat === 1) {
            turnLamp(r,la[i], 1);
        } else {
            turnLamp(r,la[i], 0);
        }
    }
};
var playMusic = function (path) {
    $("audio").attr("src", path);
    autoPlayMusic();
    audioAutoPlay();
};
var quit = function (r) {
    r.stat.prog = 0;
    r.res.password = "";
    if (t) {
        clearInterval(t);
    }
    drawBlankScrn(r);

    if( r.stat.menu_z===1){
        r.stat.menu_z=0;
        t = setInterval(drawMenuScrn, 500,r);
    }else{
        r.stat.menu_x = 0;
        r.stat.menu_y = 0;
        r.stat.menu_show=0;
        t = setInterval(drawNormal, 500,r);
    }
    if(man.stat.shield_show ===1){
        man.stat.shield_show=0;
    }
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
