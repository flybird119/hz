{include file='header.tpl'}
{include file='red_header.tpl'}
<div class="row">
    <div class="container">
        <div class="col-xs-12">
            <div class="row ord_title">
                <span><img src="./img/video_x.png" height="100%"/></span>
                <span class="q">请在下面输入您在使用中遇到的问题:</span>
            </div>
            <div class="row ">
                <div class="col-xs-12 img_pad">
                    <textarea class="ip"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 text-left">
                    <a href="#">
                        <img src="code.php" id="code"/>
                    </a>
                </div>
                <div class="col-xs-1">

                </div>
                <div class="col-xs-7 cs">
                    <input type="text" class="form-control" placeholder="验证码" id="ccc">
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-default btn_cls">清空</button>
                </div>
                <div class="col-xs-12">
                    <button class="btn btn-danger btn_spr">提交</button>
                </div>
            </div>

        </div>
    </div>
</div>

{include file='footer.tpl'}