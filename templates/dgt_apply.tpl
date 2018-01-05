{include file='header.tpl'}
{include file='red_header.tpl'}
<div class="dele">
    <div class="row de_r">
        <div class="col-xs-4">
            <div class ="lab_1 pull-right">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</div>
        </div>
        <div class="col-xs-7 no_pading_left">
            <input type="text" class="form-control ipv" id="dgt_name">
        </div>
    </div>
    <div class="row de_r">
        <div class="col-xs-4">
            <div class ="lab_1 pull-right">身&nbsp;份&nbsp;证：</div>
        </div>
        <div class="col-xs-7 no_pading_left">
            <input type="text" class="form-control ipv" id="dgt_id" >
        </div>
    </div>
    <div class="row de_r">
        <div class="col-xs-4">
            <div class ="lab_1 pull-right">联系电话：</div>
        </div>
        <div class="col-xs-7 no_pading_left">
            <input type="text" class="form-control ipv" id="dgt_mb" >
        </div>
    </div>
    <div class="row de_r">
        <div class="col-xs-4">
            <div class ="lab_1 pull-right">居住地址：</div>
        </div>
        <div class="col-xs-7 no_pading_left">
            <input type="text" class="form-control ipv" id="dgt_addr" >
        </div>
    </div>
    <hr class="line" />
    <div class="row de_r">
        <div class="col-xs-4">
            <div class ="lab_2 pull-right">个人介绍：</div>
        </div>
        <div class="col-xs-7 no_pading_left">
            <textarea class="form-control iipt" placeholder="简单情况介绍，不少于100字..." id="dgt_des"></textarea>
        </div>
    </div>

<hr class="line" />

    <div class="row de_r">
        <div class="col-xs-6">
            <div class =" pull-right"><a href="#">
                    <img src="code.php" id="code" />
                </a>
            </div>
        </div>

        <div class="col-xs-5 no_pading_left">
            <input type="text" class="form-control ipcode ipv" id="dgt_code" placeholder="验证码" >
        </div>
    </div>


    <div class="row de_r">
        <div class="col-xs-1"></div>
        <div class="col-xs-5 text-center">
            <button class="btn btn-default btn-sm bt_r" id="dgt_cancel">考虑一下</button>
        </div>
        <div class="col-xs-5 text-center">
            <button class="btn btn-default btn-sm bt_r" id="dgt_sub">提交申请</button>
        </div>
        <div class="col-xs-1"></div>
    </div>
</div>
{include file='footer.tpl'}