{include file='header.tpl'}
{include file='red_header.tpl'}
<!--title结束-->
<div class=container>
    <div class=row>
        <div class="col-xs-12 text-center">
            <div class="circle"></div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="err_div" class="hidden">
                    <span class="glyphicon glyphicon-info-sign"></span>
                        <span id="err_txt"></span>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-xs-12">
                        <input id="mb_sign" type="text" class="form-control in_success mobile" placeholder="请输入您的手机号">
                        <input id="pwd_sign" type="password" class="form-control passwd" placeholder="请输入密码">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-7">
                        <input id="code_sign" type="text" class="form-control valid" placeholder="手机验证码">
                    </div>
                    <div class="col-xs-5 no_pading_left">
                        <button class="btn btn-danger btn_get_valid">获取验证码</button>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12">
                        <button class = "btn btn-danger btn_sign">注&nbsp;&nbsp;&nbsp;&nbsp;册</button>
                    </div>
                </div>
            </div>
   </div>

    </div>

{include file='footer.tpl'}
