$(document).ready(function () {
    counter=1;
    qmax=parseInt($("#totle").text());
    timer = setInterval('flush_clock()',1000);

    $(".catagory").click(function () {
        window.location.href ="exam.php?id="+this.id;
    });


    $(".btn_pre").click(function () {
        var id = "#q"+counter;
        counter=counter-1;
        if(counter<=0){
            counter=1;
        }
        var pre = "#q"+counter;
        $(id).addClass("hidden");
        $(pre).removeClass("hidden");
    });


    $(".btn_next").click(function () {
        var id = "#q"+counter;
        counter=counter+1;
        if(counter>qmax){
            counter=qmax;
            alert("测试完毕，已经到最后一题！");
            return;
        }
        var next='#q'+counter;
        $(id).addClass("hidden");
        $(next).removeClass("hidden");
    });

    $(".btn_sub").click(function () {
        var post_data = get_answer();
        $("#post_data").text(post_data);
        $("#post_form").submit();
    });
});

function get_result(i,c) {
    var rmap=['A','B','C','D','E','F','G','H','I','J','K','L','M','N'];
    switch (i) {
        case 1:
        case 3:
            var n="r"+c;
            var result= $('input:radio[name="'+n+'"]:checked').val();
                return rmap[result-1];//ramp索引从0开始
        case 2:
            var n ="c"+c;
            var result=""
            $('input[name="'+n+'"]').each(function () {
                if (this.checked) {
                    result += rmap[this.value-1];
                }
            });
            return result;
        default:
            alert("参数错误，该类型暂时不支持！")
            return "Z";
    }
}

function get_type(c){
    var pre ="#type"+c;
    var r = parseInt($(pre).text());
    return r;
}


function get_id(c){
    var pre ="#qid"+c;
    var r = $(pre).text();
    return r;
}

function get_right_answer(c){
    var pre ="#RA"+c;
    var r = $(pre).text();
    return r;
}

function get_score(c){
    var pre ="#SCORE"+c;
    var r = $(pre).text();
    return r;
}

function get_answer(){
    var r_r = {};
    for (var i =0;i<qmax;i++){
        var tmp = {};
        var counter = i+1;
        var tp = get_type(counter);
        tmp.id=get_id(counter);
        tmp.type =tp;
        tmp.answer =get_result(tp,counter);
        tmp.right = get_right_answer(counter);
        tmp.score = get_score(counter)
        r_r[i] =tmp;
    }
    return JSON.stringify(r_r);
}

function flush_clock() {


}