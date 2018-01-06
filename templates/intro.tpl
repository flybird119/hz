<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <title>{$title}</title>
    <link href="./style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./style/huazhu.css" rel="stylesheet">
    <link href="{$css0}" rel="stylesheet">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
        wx.config({
            debug: false,
            appId: '{$JP["appId"]}',
            timestamp: '{$JP["timestamp"]}',
            nonceStr: '{$JP["nonceStr"]}',
            signature: '{$JP["signature"]}',
            jsApiList: [
                'onMenuShareTimeline',
                'onMenuShareAppMessage'
        ]
        });
        wx.ready(function () {
            wx.onMenuShareTimeline({
                title: '消防新干线',
                //link: {'http://www.119kc.cn/intro.php?saler='|cat:$saler|urlencode},
                imgUrl: 'http://www.huazhuedu.com/img/logo.png', // 分享图标
                success: function () {
                    alert("分享成功");
                },
                cancel: function () {
                }
            });

            wx.onMenuShareAppMessage({
                title: '消防新干线',
                desc: '消防新干线，考试全过线!',
                //link: {'http://www.119kc.cn/intro.php?saler='|cat:$saler|urlencode},
                imgUrl: 'http://www.huazhuedu.com/img/logo.png',
                type: 'link',
                dataUrl: '',
                success: function () {
                    alert("分享成功");
                },
                cancel: function () {
                }
            });

        });
    </script>
</head>
<body>
<div class="container bg">
    <div class="row title no_margin">
        <div class="col-xs-2">
            <div class="x pull-left"></div>
        </div>
        <div class="col-xs-8">
            <div class="t center-block text-center">每天十分钟，考试好轻松</div>
        </div>
        <div class="col-xs-2">
            <div class="m pull-right"></div>
        </div>
    </div>

    <div class="tmp_1"></div>

    <div class="row no_margin">

        <div class="col-xs-12">
            <div class="ad"></div>
        </div>

    </div>
    <div class="tmp_2"></div>
    <div class="row no_margin">
        <div class="col-xs-12">
            <input id="mb_sign" type="text" class="form-control inp" placeholder="请输入您的手机号">
        </div>
        <div class="col-xs-12">
            <input id="pwd_sign" type="password" class="form-control inp" placeholder="请输入密码">
        </div>
    </div>

    <div class="row no_margin">
        <div class="col-xs-7">
            <input type="text" class="form-control inp" id="code_sign" placeholder="请输入验证码">
        </div>
        <div class="col-xs-5">
            <button class="btn btn-danger inp btn_get_valid">获取验证码</button>
        </div>
    </div>

    <div class="row no_margin">
        <div class="col-xs-12">
            <button class="btn btn-danger inp btn_sign">快速注册</button>
        </div>
    </div>

    <div class="row no_margin hidden">
        <div class="col-xs-12">
            <label id="saler">{$saler}</label>
        </div>
    </div>


    <div class="row no_margin">

        <div class="col-xs-12">
            <div class="des">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;消防新干线是针对建(构)筑物消防员考试而推出的一款在线学习，考试系统,本系统含：章节练习，在线模拟考试，视频教学，在线读书，模拟真机操作等强大功能，是你消防考试顺利过关的法宝！
            </div>
        </div>
    </div>
    <div class="tmp_2"></div>
    <div class="row row_pad no_margin">
        <div class="col-xs-12">
            <div class="center-block text-center">
                <img src="./img/t1.png"/>
            </div>
        </div>
    </div>

    <div class="row no_margin">
        <div class="col-xs-12">
            <div class="center-block text-center d_title">
                消防职业 “钱” 景
            </div>
        </div>

        <div class="col-xs-12">
            <div class="center-block text-center d_en">
                Fire Career Prospects
            </div>
        </div>
        <div class="d_p">
            &nbsp;&nbsp;&nbsp;&nbsp;近年来，我国经济高速发展和城市化进程快速推进给社会消防工作提出了更高的要求。而我国的消防事业由于底子薄等原因导致发展形势极其紧迫，特别是消防行业从业人员和管理人才稀缺，从业人员对专业的掌握程度不高。据统计，我国对于建（构）筑物消防员还有五十万的人才缺口。在这一时代背景下，作为从事消防行业必备证书的建（构）筑物消防员证书的含金量升值空间明显。在京津、长三角和珠三角等地区，拥有建（构）筑物消防员证书，月薪都在6000元以上，其他地区拥有证书的人才月薪也在4000以上。
        </div>
        <div class="d_p thumbnail">
            <img src="./img/pei_01.png"/>
        </div>

    </div>

    <div class="tmp_2"></div>
    <div class="row row_pad no_margin">
        <div class="col-xs-12">
            <div class="center-block text-center">
                <img src="./img/t2.png"/>
            </div>
        </div>
    </div>

    <div class="row no_margin">
        <div class="col-xs-12">
            <div class="center-block text-center d_title">
                国家政策与消防考试
            </div>
        </div>

        <div class="col-xs-12">
            <div class="center-block text-center d_en">
                National Policy and Fire Exam
            </div>
        </div>
    </div>

    <div class="row no_margin">
        <div class="col-xs-12">
            <div class="c_box">

                <div class="c_left_2">
                    <div class="box_title">中华人民共和国消防法</div>
                    <div class="box_list">1.单位的主要负责人是本单位的消防安全负责人。</div>
                    <div class="box_list">2.消防安全重点单位需要确定本单位的消防安全管理人，组织实施本单位的消防安全管理工作。</div>
                    <div class="box_list">3.从事自动消防系统的操作人员，必须持证上岗。</div>
                    <div class="box_title">消防安全责任制实施办法</div>
                    <div class="box_list">1.机关、团体、企业、事业等单位设有消防控制室的，实行24小时值班制度，每班不少于2人，并持证上岗。</div>
                    <div class="box_list">2.消防安全责任人、消防安全管理人、特有工种人员须经消防安全培训；自动消防设施操作人员应取得建（构）筑物消防员资格证书。
                    </div>
                </div>
                <div class="c_right_2"></div>
            </div>
        </div>
    </div>

    <div class="tmp_2"></div>
    <div class="row row_pad no_margin">
        <div class="col-xs-12">
            <div class="center-block text-center">
                <img src="./img/t3.png"/>
            </div>
        </div>
    </div>

    <div class="row no_margin">
        <div class="col-xs-12">
            <div class="center-block text-center d_title">
                建（构）筑物消防员报名要求
            </div>
        </div>

        <div class="col-xs-12">
            <div class="center-block text-center d_en">
                Fireman Registration Requirements
            </div>
        </div>

        <div class="col-xs-12">
            <div class="box_con">
                <div class="box_title">
                    初级建（构）筑物消防员
                </div>

                <table>
                    <tr>
                        <td width="5%"></td>
                        <td width="10%"><img src="./img/p1.png"/></td>
                        <td width="80%">具有初中以上学历。</td>
                        <td width="5%"></td>
                    </tr>

                    <tr>
                        <td width="5%"></td>
                        <td width="10%"><img src="./img/p2.png"/></td>
                        <td width="80%">经建(构)筑物初级消防员正规职业培训，达规定标准学时数并取得结业证书。
                        <td width="5%"></td>
                    </tr>

                    <tr>
                        <td width="5%"></td>
                        <td width="10%"><img src="./img/p3.png"/></td>
                        <td width="80%">在本职业连续见习工作1年以上。</td>
                        <td width="5%"></td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="col-xs-12">
            <div class="box_con">
                <div class="box_title">
                    中级建（构）筑物消防员
                </div>

                <table>
                    <tr>
                        <td width="5%"></td>
                        <td width="10%"><img src="./img/p1.png"/></td>
                        <td width="80%">具有初中以上学历。</td>
                        <td width="5%"></td>
                    </tr>

                    <tr>
                        <td width="5%"></td>
                        <td width="10%"><img src="./img/p2.png"/></td>
                        <td width="80%">取得本职业初级职业资格证书后，连续从事本职业工作2年以上，经建(构)筑物中级消防员正规职业培训，达规定标准学时数并取得结业证书。
                        <td width="5%"></td>
                    </tr>

                    <tr>
                        <td width="5%"></td>
                        <td width="10%"><img src="./img/p3.png"/></td>
                        <td width="80%">取得本职业初级职业资格证书后，连续从事本职业工作4年以上。</td>
                        <td width="5%"></td>
                    </tr>

                    <tr>
                        <td width="5%"></td>
                        <td width="10%"><img src="./img/p4.png"/></td>
                        <td width="80%">连续从事本职业工作6年以上。</td>
                        <td width="5%"></td>
                    </tr>

                    <tr>
                        <td width="5%"></td>
                        <td width="10%"><img src="./img/p5.png"/></td>
                        <td width="80%">取得经劳动和社会保障行政部门审核认定的、以中级技能为培养目标的中等以上职业学校本职业(专业)毕业证书。</td>
                        <td width="5%"></td>
                    </tr>
                </table>
            </div>
        </div>


    </div>

    <div class="tmp_2"></div>
    <div class="row row_pad no_margin">
        <div class="col-xs-12">
            <div class="center-block text-center">
                <img src="./img/t4.png"/>
            </div>
        </div>
    </div>

    <div class="row no_margin">
        <div class="col-xs-12">
            <div class="center-block text-center d_title">
                服务类型
            </div>
        </div>

        <div class="col-xs-12">
            <div class="center-block text-center d_en">
                Service Types
            </div>
        </div>
    </div>


    <div class="row no_margin">
        <div class="col-xs-1">
        </div>
        <div class="col-xs-10">
            <div class="ad_1"></div>
        </div>
        <div class="col-xs-1">

        </div>
    </div>

    <div class="tmp_2"></div>
    <div class="row no_margin row_pad">
        <div class="col-xs-12">
            <div class="center-block text-center">
                <img src="./img/t5.png"/>
            </div>
        </div>
    </div>

    <div class="row no_margin">
        <div class="col-xs-12">
            <div class="center-block text-center  d_title">
                培训体系
            </div>
        </div>

        <div class="col-xs-12">
            <div class="center-block text-center d_en">
                Training Systems
            </div>
        </div>
    </div>

    <div class="row no_margin">
        <div class="col-xs-4">
            <div class="p_tu center-block text-center thumbnail"><img src="./img/list1.png"/></div>
        </div>

        <div class="col-xs-4 ">
            <div class="p_tu enter-block text-center thumbnail"><img src="./img/list2.png"/></div>
        </div>

        <div class=" col-xs-4">
            <div class="p_tu center-block text-center thumbnail"><img src="./img/list3.png"/></div>
        </div>
        <div class="col-xs-4 ">
            <div class="p_tu enter-block text-center thumbnail"><img src="./img/list4.png"/></div>
        </div>

        <div class="col-xs-4">
            <div class="p_tu center-block text-center thumbnail"><img src="./img/list5.png"/></div>

        </div>
        <div class="col-xs-4">
            <div class="p_tu enter-block text-center thumbnail"><img src="./img/list6.png"/></div>
        </div>
    </div>

    <div class="row no_margin">
        <div class="col-xs-12">
            <div class="center-block text-center bg_e">
                <img src="./img/vcode.png"/>
                <div><span>扫一扫，关注我们</span></div>
            </div>
        </div>
    </div>

</div>
<script src="./script/jquery-3.2.1.min.js"></script>
<script src="./style/bootstrap/js/bootstrap.min.js"></script>
<script src="./script/huazhu.js"></script>
<script type="text/javascript" charset="utf-8"  src="./script/intro.js"></script>
</body>
</html>