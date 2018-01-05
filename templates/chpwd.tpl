{include file='header.tpl'}
{include file='red_header.tpl'}
<div class = "row ">
    <div class="col-xs-12 tips">
        <div class="tip_1">
        <span class="glyphicon glyphicon-info-sign"></span>
            <span id="tip">新密码不能与旧密码相同！</span></div>
    </div>
</div>
<div class="tmp"></div>
<div class = "row bg_w">
    <div class="col-xs-1">

    </div>
    <div class="col-xs-3">
        <div class="des">手机号码:</div>
    </div>

    <div class="col-xs-7">
            <input type="text" class="form-control" id="mb_sign"/>
    </div>

    <div class="col-xs-1">

    </div>

</div>

<div class = "row bg_w">
    <div class="col-xs-1">

    </div>
    <div class="col-xs-3">
        <div class="des">新密码:</div>
    </div>

    <div class="col-xs-7">
        <input type="password" class="form-control" id="pwd_sign" />
    </div>

    <div class="col-xs-1">

    </div>

</div>



<div class = "row bg_w">
    <div class="col-xs-1">

    </div>

    <div class="col-xs-5">
        <input type="text" class="form-control" id="code_sign" />
    </div>

    <div class="col-xs-5">
        <button class="btn btn-danger btn_code form-control">获取验证码</button>

    </div>

    <div class="col-xs-1">

    </div>

</div>

<div class = "row bg_w">
    <div class="col-xs-1">

    </div>

    <div class="col-xs-10">
        <button class="btn btn-danger btn_ch form-control">提交修改</button>

    </div>

    <div class="col-xs-1">

    </div>

</div>




{include file='footer.tpl'}